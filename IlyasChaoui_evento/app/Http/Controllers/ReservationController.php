<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Event;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Mail\ReservationEvent;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // You can add code here if needed
    }

    /**
     * Store a newly created resource in storage.
     */
    public function reserve(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'eventId' => 'required',
            'acceptation' => 'required',
            'email' => 'required|email', // Improved email validation
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $user = Auth::user();
        $status = $request->input('acceptation') == '1' ? '0' : '1';

        $reservation = Reservation::create([
            'event_id' => $request->input('eventId'),
            'user_id' => $user->id,
            'email' => $request->input('email'),
            'status' => $status,
        ]);

        $event = Event::with('category', 'city', 'createdBy')->find($request->input('eventId'));

        $pdf = PDF::loadView('Reserve.ticket', compact('reservation', 'event'));
        $pdfPath = storage_path('app/public/MailTicketTemplates/ticket_' . $reservation->id . '.pdf');
        $pdf->save($pdfPath);

        Mail::to([$request->input('email')])->send(new ReservationEvent($pdfPath));

        return redirect('/')->with('success', 'Evenement bien ajouté.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // You can add code here if needed
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // You can add code here if needed
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // You can add code here if needed
    }
}
