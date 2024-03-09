<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Permission\Models\Role;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::all();
        $eventNames = $events->pluck('name')->toArray();
        $reservationCounts = [];

        foreach ($events as $event) {
            $reservationCounts[] = $event->reservations()->count();
        }

        $data = [
            'user' => User::all(),
            'counts' => [
                'reservationCount' => Reservation::count(),
                'usersCount' => User::count(),
                'categoryCount' => Category::count(),
                'eventCount' => Event::count(),
            ],
            'roles' => Role::all(),
            'allUsers' => User::all(),
            'lastInsertionTime' => [
                'User' =>  User::latest()->first()?->created_at->diffForHumans() ?? 'No User Found',
                'Category' =>  Category::latest()->first()?->created_at->diffForHumans() ?? 'No Category Found',
                'Reservation' =>  Reservation::latest()->first()?->created_at->diffForHumans() ?? 'No Reservation ',
                'Event' =>  Event::latest()->first()?->created_at->diffForHumans() ?? 'No Event Found',
            ],
            'eventNames' => $eventNames,
            'reservationCounts' => $reservationCounts,
        ];

        return view('dashboardPage', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    function updateRole(Request $request) {
        $user = User::find($request->userId);
        $role = Role::find($request->id);

        $user->removeRole($user->roles->first());
        $user->assignRole($role);
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
