<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     $testimonials = Testimonial::orderBy('id', 'DESC')->get();
        return view('website.testimonials',compact('testimonials'));
    }

}
