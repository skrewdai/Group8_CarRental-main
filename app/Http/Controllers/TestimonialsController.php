<?php

namespace App\Http\Controllers;

use App\Models\Testimonials;
use Illuminate\Http\Request;

class TestimonialsController extends Controller
{
    public function index(){
        $testimonys = Testimonials::all();
        return view('admin.Testimonys',compact('testimonys'));
    }
    public function index2(){
        $testimonys = Testimonials::all();
        return view('Testimonials',compact('testimonys'));
    }
    public function store(Request $request)
    {
        $testimony = new Testimonials();
        $testimony->name = $request->input('name');
        $testimony->message = $request->input('message');
        
        
        $testimony->save();

        return redirect()->route('testimony')->with('success','');

    }
}
