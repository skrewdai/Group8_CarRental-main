<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reservation;

class UserController extends Controller
{
    public function index()
    {
        // Your user dashboard logic here
        
        return view('user.dashboard');
    }

    public function showReservations()
    {
        $reservations = Reservation::where('user_id', auth()->id())
                                   ->where('status', 'approved')
                                   ->get();

        return view('user.reservations', compact('reservations'));
    }

    public function approvedReservations()
{

    $user = auth()->user();
    $approvedReservations = $user->reservations()->where('status', 'approved')->get();
    return view('user.approved_reservations', compact('approvedReservations'));
}

public function declinedReservations()
{
    $user = auth()->user();
    $declinedReservations = $user->reservations()->where('status', 'declined')->get();
    return view('user.declined_reservations', compact('declinedReservations'));
}
}
