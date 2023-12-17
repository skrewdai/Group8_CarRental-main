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

             // Check if the user already has a reservation with a "pending" status
            $existingPendingReservation = Reservation::where('email', $request->input('email'))
                ->where('status', 'pending')
                ->exists();

            if ($existingPendingReservation) {
                return redirect()->back()->with('error', 'You already have a reservation with a pending status.');
            }

            // Check if a similar reservation already exists
            $existingReservation = Reservation::where('email', $request->input('email'))
                ->where('pickup', $request->input('pickup'))
                ->where('return', $request->input('return'))
                ->where('pickdate', $request->input('datetime'))
                ->where('retdate', $request->input('datetime1'))
                ->exists();

            if ($existingReservation) {
                return redirect()->back()->with('error', 'You have already booked a similar reservation.');
            }

            // Check if the selected car is already booked during the specified period
            $existingCarReservation = Reservation::where('car', $request->input('car'))
                ->where(function ($query) use ($request) {
                $query->where(function ($q) use ($request) {
                    $q->where('pickdate', '<', $request->input('datetime'))
                        ->where('retdate', '>', $request->input('datetime'));
                    })
                ->orWhere(function ($q) use ($request) {
                    $q->where('pickdate', '<', $request->input('datetime1'))
                        ->where('retdate', '>', $request->input('datetime1'));
                    })
                ->orWhere(function ($q) use ($request) {
                    $q->whereBetween('pickdate', [$request->input('datetime'), $request->input('datetime1')])
                        ->orWhereBetween('retdate', [$request->input('datetime'), $request->input('datetime1')]);
                    });
            })
            ->exists();

            if ($existingCarReservation) {
            return redirect()->back()->with('error', 'The selected car is already booked during the specified period.');
            }

        // If no similar reservation, pending reservation, or overlapping car reservation exists,
        // proceed with creating the reservation
            $reservation = new Reservation();
            $reservation->pickup = $request->input('pickup');
            $reservation->return = $request->input('return');
            $reservation->pickdate = $request->input('datetime');
            $reservation->retdate = $request->input('datetime1');
            $reservation->fname = $request->input('fname');
            $reservation->email = $request->input('email');
            $reservation->phone = $request->input('phone');
            $reservation->car = $request->input('car');
            $reservation->status = 'pending';
            $reservation->save();

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
