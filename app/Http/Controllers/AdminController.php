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
    
        return view('/admin/dash', ['isAdmin' => $isAdmin]);
    }
  
}
