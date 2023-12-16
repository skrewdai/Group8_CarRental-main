<?php

namespace App\Http\Controllers;

use App\Models\Testimonials;
use Illuminate\Http\Request;

class TestimonialsController extends Controller
{
    public function index()
    {
        try {
            $testimonys = Testimonials::all();
            return view('admin.Testimonys', compact('testimonys'));
        } catch (\Exception $e) {
            // Log the exception or handle it as needed
            return redirect()->back()->with('error', 'Error fetching testimonials: ' . $e->getMessage());
        }
    }

    public function index2()
    {
        try {
            $testimonys = Testimonials::all();
            return view('Testimonials', compact('testimonys'));
        } catch (\Exception $e) {
            // Log the exception or handle it as needed
            return redirect()->back()->with('error', 'Error fetching testimonials: ' . $e->getMessage());
        }
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|max:255',
                'message' => 'required',
            ]);

            $testimony = new Testimonials();
            $testimony->name = $request->input('name');
            $testimony->message = $request->input('message');

            $testimony->save();

            return redirect()->route('user.dashboard')->with('success', 'Testimonial added successfully.');
        } catch (\Exception $e) {
            // Log the exception or handle it as needed
            return redirect()->back()->with('error', 'Error adding testimonial: ' . $e->getMessage());
        }
    }
}