<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Testimonials;
class UserController extends Controller
{
    public function provedMethod()
    {
        // Your logic for the 'user.proved' route

        return view('user.proved'); // Adjust this based on your application's structure
    }
    public function index()
    {
        // Your user dashboard logic here
        
        return view('user.dashboard');
    }

    public function showFeedback()
    {
        // Your logic to handle the feedback form submission

        // For example, you can access form data using $request
       
        // Perform actions with the form data, e.g., store in the database

        // Redirect back or to a success page
        return view('user.Feedback');
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

//

public function index2(){
    $reservations = Reservation::all();
    return view('user.Reserve',compact('reservations'));
}
}
