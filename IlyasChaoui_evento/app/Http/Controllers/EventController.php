<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\City;
use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate incoming data
        $validatedData = $request->validate([
            'eventPicture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'title' => 'required|string',
            'price' => 'required|integer',
            'city_id' => 'required|exists:cities,id',
            'category_id' => 'required|exists:categories,id',
            'placeNumber' => 'required|integer',
            'deadline' => 'required|date',
            'description' => 'required|string',
        ]);

        // Get the authenticated user
        $user = Auth::user();

        $acceptation = $request->has('reservation_type') ? 1 : 0;
        // Create a new Event instance
        $event = Event::create([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'created_by' => $user->id,
            'price' => $validatedData['price'],
            'place_number' => $validatedData['placeNumber'],
            'city_id' => $validatedData['city_id'],
            'deadline' => Carbon::parse($validatedData['deadline'])->toDateString(),
            'category_id' => $validatedData['category_id'],
            'acceptation' => $acceptation,
        ]);

        // Store the uploaded image using Spatie Media Library
        $file = $request->file('eventPicture');
        $media = $event->addMedia($file)->toMediaCollection();

        // Set the media ID in the id_image column
        $event->id_image = $media->id;

        // Save the event to the database
        $event->save();

        // Redirect or return a response
        return redirect('/')->with('success', 'Event created successfully.');
    }



    /**
     * --------------------------------
     * Admin
     * --------------------------------
     */

    /**
     * Display the specified resource.
     */
    public function showEvents()
    {
        $events = Event::all();
        $eventNames = $events->pluck('name')->toArray();
        $reservationCounts = [];
        foreach ($events as $event) {
            $reservationCounts[] = $event->reservations()->count();
        }

        $data = [
            'events' => Event::all()->where('status', '0'),
            'user' => User::all(),
            'roles' => Role::all(),
            'eventCount' => Event::all()->where('status', '0')->count(),
            'eventNames' => $eventNames,
            'reservationCounts' => $reservationCounts,

        ];

        return view('dashboardPage', compact('data'));
    }

    /**
     * Display the specified resource.
     */
    public function approveEvent(Request $request, $id)
    {
        $event = Event::findOrFail($id);
        $event->update(['status' => 1]);

        return redirect('/event')->with('success', 'Evenement bien ajoutée.');
    }

    public function declineEvent(Request $request, $id)
    {
        $event = Event::findOrFail($id);
        $event->delete();

        return redirect('/event')->with('success', 'Evenement bien subprime.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string',
            'price' => 'required|integer',
            'city_id' => 'required|exists:cities,id',
            'category_id' => 'required|exists:categories,id',
            'placeNumber' => 'required|integer',
            'deadline' => 'required|date',
            'description' => 'required|string',
        ]);

        $event = Event::findOrFail($id);
        // Update the event with the new data
        $user = Auth::user();
        $acceptation = $request->has('reservation_type') ? 1 : 0;
        // Create a new Event instance
        $event->update([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'created_by' => $user->id,
            'price' => $validatedData['price'],
            'place_number' => $validatedData['placeNumber'],
            'city_id' => $validatedData['city_id'],
            'deadline' => Carbon::parse($validatedData['deadline'])->toDateString(),
            'category_id' => $validatedData['category_id'],
            'acceptation' => $acceptation,
        ]);

        // Redirect or return a response
        return redirect()->route('myEvents.page')->with('success', 'Event updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function deleteEvent(string $id)
    {
        $event = Event::find($id);
        $event->delete();
        return redirect()->route('myEvents.page')->with('success', 'Event was deleted successfully');
    }
}
