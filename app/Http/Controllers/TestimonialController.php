<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestimonialController extends Controller
{
      public function create()
    {
        
       return view('testimonials.create');
    }

    
}
