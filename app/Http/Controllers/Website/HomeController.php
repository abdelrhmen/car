<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Testimonial;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     $cars = Car::orderBy('id', 'DESC')->take(6)->get();
     $testimonials = Testimonial::orderBy('id', 'DESC')->take(3)->get();
        return view('website.index',compact('cars','testimonials'));
    }

    public function car($id)
    {
        $car = Car::findOrFail($id);
        $comments = Comment::where('car_id',$id)->get();
        $categories = Category::with('cars')->get();

        return view('website.single',compact('car','categories','comments'));
    }

    public function comment(Request $request)
    {
        $request->all();

        $comment = Comment::create($request->all());

        return redirect()->route('car',$request->car_id);
    }

}
