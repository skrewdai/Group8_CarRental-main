<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Auth;
use App\Models\Testimonials;

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
    
        return view('/admin/dash', ['isAdmin' => $isAdmin]);
    }
  
    public function deleteFeedback($id)
    {
    try {
        // Logic to delete feedback by ID
        $testimonial = Testimonials::findOrFail($id);
        $testimonial->delete();

        $message = 'Feedback deleted successfully';
        return redirect()->back()->with('success', $message);
    } catch (\Exception $e) {
        // Log the exception or handle it as needed
        $errorMessage = 'Error deleting feedback: ' . $e->getMessage();
        return redirect()->back()->with('error', $errorMessage);
    }
    }

}
