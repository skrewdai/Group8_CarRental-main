<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\ReservationController;

class AdminController extends Controller
{
    public function index()
    {
        // Your user dashboard logic here
        return view('admin.dashboard');
    }

}
