<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Message;
use App\Models\Testimonial;
use Illuminate\Http\Request;


class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('website.contact',);
    }

    public function store(Request $request)
    {
        Message::create($request->all());

        return view('website.contact',);
    }

}
