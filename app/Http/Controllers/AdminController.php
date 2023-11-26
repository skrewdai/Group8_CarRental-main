<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        // Your user dashboard logic here
        return 'Controller is working!';
    }
    

    public function showDashboard()
    {
        $isAdmin = Auth::check() && Auth::user()->role === 'admin';
    
        return view('dashboard', ['isAdmin' => $isAdmin]);
    }
    public function store(Request $request)
    {
        $reservation = new Reservation();
        $reservation->pickup = $request->input('pickup');
        $reservation->return = $request->input('return');
        $reservation->pickdate = $request->input('datetime');
        $reservation->retdate = $request->input('datetime1');
        $reservation->fname = $request->input('fname');
        $reservation->email = $request->input('email');
        $reservation->phone = $request->input('phone');
        
        $reservation->save();

        return view('admin', compact('reservations'));

    }
}
