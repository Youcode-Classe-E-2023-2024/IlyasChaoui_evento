<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

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
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
