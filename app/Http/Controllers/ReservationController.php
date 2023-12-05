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

    public function index(){
        $reservations = Reservation::all();
        return view('admin.Reserve',compact('reservations'));
    }

 // ReservationController.php

// ...

public function approve($id)
{
    $reservation = Reservation::findOrFail($id);
    
    // Check if the reservation is not already approved
    if ($reservation->status !== 'approved') {
        $reservation->status = 'approved';
        $reservation->save();
        return redirect()->route('admin.Reserve')->with('success', 'Reservation approved successfully.');
    } else {
        return redirect()->route('admin.Reserve')->with('error', 'Reservation is already approved.');
    }
}


public function decline($id)
{
    // Logic to decline reservation with ID $id
    return redirect()->route('admin.Reserve')->with('success', 'Reservation declined successfully.');
}

public function approvedReservations()
{
    $user = Auth::user();
    $approvedReservations = $user->reservations()->where('status', 'approved')->get();
    return view('user.approved_reservations', compact('approvedReservations'));
}
}
