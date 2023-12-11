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
        // Logic to delete feedback by ID
        Testimonials::findOrFail($id)->delete();

        return redirect()->back()->with('success', 'Feedback deleted successfully');
    }
}
