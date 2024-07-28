<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Testimonial;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::orderBy('id', 'DESC')->paginate(6);
        $testimonials = Testimonial::orderBy('id', 'DESC')->take(3)->get();

        return view('website.listing',compact('cars','testimonials'));
    }

}
