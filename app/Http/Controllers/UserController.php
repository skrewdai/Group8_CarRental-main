<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Testimonials;

class UserController extends Controller
{
    public function provedMethod()
    {
        try {
            // Your logic for the 'user.proved' route
            return view('user.proved'); // Adjust this based on your application's structure
        } catch (\Exception $e) {
            // Log the exception or handle it as needed
            return redirect()->back()->with('error', 'Error processing proved method: ' . $e->getMessage());
        }
    }

    public function index()
    {
        try {
            // Your user dashboard logic here
            return view('user.dashboard');
        } catch (\Exception $e) {
            // Log the exception or handle it as needed
            return redirect()->back()->with('error', 'Error loading user dashboard: ' . $e->getMessage());
        }
    }

    public function showFeedback(Request $request)
    {
        try {
            // Your logic to handle the feedback form submission

            // For example, you can access form data using $request

            // Perform actions with the form data, e.g., store in the database

            // Redirect back or to a success page
            return view('user.Feedback');
        } catch (\Exception $e) {
            // Log the exception or handle it as needed
            return redirect()->back()->with('error', 'Error processing feedback form: ' . $e->getMessage());
        }
    }

    public function showReservations()
    {
        try {
            $reservations = Reservation::where('user_id', auth()->id())
                                       ->where('status', 'approved')
                                       ->get();

            return view('user.reservations', compact('reservations'));
        } catch (\Exception $e) {
            // Log the exception or handle it as needed
            return redirect()->back()->with('error', 'Error loading user reservations: ' . $e->getMessage());
        }
    }

    public function approvedReservations()
    {
        try {
            $user = auth()->user();
            $approvedReservations = $user->reservations()->where('status', 'approved')->get();
            return view('user.approved_reservations', compact('approvedReservations'));
        } catch (\Exception $e) {
            // Log the exception or handle it as needed
            return redirect()->back()->with('error', 'Error loading approved reservations: ' . $e->getMessage());
        }
    }

    public function declinedReservations()
    {
        try {
            $user = auth()->user();
            $declinedReservations = $user->reservations()->where('status', 'declined')->get();
            return view('user.declined_reservations', compact('declinedReservations'));
        } catch (\Exception $e) {
            // Log the exception or handle it as needed
            return redirect()->back()->with('error', 'Error loading declined reservations: ' . $e->getMessage());
        }
    }

    public function index2()
    {
        try {
            $reservations = Reservation::all();
            return view('user.Reserve', compact('reservations'));
        } catch (\Exception $e) {
            // Log the exception or handle it as needed
            return redirect()->back()->with('error', 'Error loading user reservations: ' . $e->getMessage());
        }
    }
}
