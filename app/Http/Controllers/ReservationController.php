<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ReservationController extends Controller
{
    public function store(Request $request)
    {
        try {
            // Validate the request data
            $validator = Validator::make($request->all(), [
                'pickup' => 'required|max:255',
                'return' => 'required|max:255',
                'datetime' => 'required|date_format:Y-m-d\TH:i',
                'datetime1' => 'required|date_format:Y-m-d\TH:i',
                'fname' => 'required|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'required|max:20',
                'car' => 'required|in:Honda City,Toyota Vios,Mazda 2,Mitsubishi Mirage,Toyota Avanza,Honda BRV',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            // ... (your existing validation and reservation creation logic)

            return redirect()->route('user.dashboard')->with('success', 'Reservation created successfully.');
        } catch (\Exception $e) {
            // Log the exception or handle it as needed
            return redirect()->back()->with('error', 'Error creating reservation: ' . $e->getMessage());
        }
    }

    public function index()
    {
        try {
            $reservations = Reservation::all();
            return view('admin.Reserve', compact('reservations'));
        } catch (\Exception $e) {
            // Log the exception or handle it as needed
            return redirect()->back()->with('error', 'Error fetching reservations: ' . $e->getMessage());
        }
    }

    public function userreserve()
    {
        try {
            $userEmail = Auth::user()->email;
            $reservations = DB::select("SELECT * FROM reservations WHERE email = ?", [$userEmail]);
            return view('user.dashboard', compact('reservations'));
        } catch (\Exception $e) {
            // Log the exception or handle it as needed
            return redirect()->back()->with('error', 'Error fetching user reservations: ' . $e->getMessage());
        }
    }

    public function approve($id)
    {
        try {
            $reservation = Reservation::findOrFail($id);
            
            // Check if the reservation is not already approved
            if ($reservation->status !== 'approved') {
                $reservation->status = 'approved';
                $reservation->save();
                return redirect()->route('admin.Reserve')->with('success', 'Reservation approved successfully.');
            } else {
                return redirect()->route('admin.Reserve')->with('error', 'Reservation is already approved.');
            }
        } catch (\Exception $e) {
            // Log the exception or handle it as needed
            return redirect()->route('admin.Reserve')->with('error', 'Error approving reservation: ' . $e->getMessage());
        }
    }

    public function decline($id)
    {
        try {
            $reservation = Reservation::findOrFail($id);
            
            // Check if the reservation is not already declined
            if ($reservation->status !== 'declined') {
                $reservation->status = 'declined';
                $reservation->save();
                return redirect()->route('admin.Reserve')->with('success', 'Reservation declined successfully.');
            } else {
                return redirect()->route('admin.Reserve')->with('error', 'Reservation is already declined.');
            }
        } catch (\Exception $e) {
            // Log the exception or handle it as needed
            return redirect()->route('admin.Reserve')->with('error', 'Error declining reservation: ' . $e->getMessage());
        }
    }

    public function approvedReservations()
    {
        try {
            $user = Auth::user();
            $approvedReservations = $user->reservations()->where('status', 'approved')->get();
            return view('user.approved_reservations', compact('approvedReservations'));
        } catch (\Exception $e) {
            // Log the exception or handle it as needed
            return redirect()->route('user.dashboard')->with('error', 'Error fetching approved reservations: ' . $e->getMessage());
        }
    }
}
