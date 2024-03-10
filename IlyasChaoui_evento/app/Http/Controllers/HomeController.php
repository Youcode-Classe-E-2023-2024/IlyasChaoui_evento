<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\City;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = null;

        if (Auth::check()) {
            $user = Auth::user();
        }

        $cities = City::all();
        $categories = Category::all();
        $events = Event::with(['category', 'city', 'reservations'])
            ->where('status', '1')->get();
        return view('homePage', compact('user', 'cities', 'categories', 'events'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function showContentPage($id, $categoryId)
    {
        $event = Event::find($id);
        $popularEvents = Event::latest()->take(3)->get();
        $relatedEvents = Event::where('category_id', $categoryId)->latest()->take(3)->get();
        return view('homePages.contentPage', compact('event', 'popularEvents', 'relatedEvents'));
    }

    public function showMyEventStaticPage($id, $categoryId)
    {
        $event = Event::with(['reservations', 'reservers'])
            ->find($id);

        $popularEvents = Event::latest()->take(3)->get();
        $relatedEvents = Event::where('category_id', $categoryId)->latest()->take(3)->get();

        return view('homePages.MyEventStaticPage', compact('event', 'popularEvents', 'relatedEvents'));
    }

    public function showMyEventsPage()
    {

        $user = null;

        if (Auth::check()) {
            $user = Auth::user();
        }

        $cities = City::all();
        $categories = Category::all();
        $userId = Auth::id();
        $events = Event::with(['category', 'city', 'reservations'])
            ->where('created_by', $userId)
            ->get();
        $eventCount = $events->count();
        return view('homePages.myEvents', compact('cities','user', 'categories', 'events','eventCount'));
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
