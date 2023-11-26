<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{

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

        return redirect()->route('Offers')->with('success','');

    }
}
