<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::paginate(10);

        return view('admin.testimonial.index',compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.testimonial.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $testimonial = Testimonial::create( $request->except(['image','published']) );

        if($request->published){
            $testimonial->update(['published'=>1]);
        }else{
            $testimonial->update(['published'=>0]);
        }

        if ($request->image) {
            $testimonial->addMediaFromRequest('image')->toMediaCollection('testimonial');
        }


        return redirect()->route('admin.testimonials.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $testimonial =Testimonial::findOrFail($id);

        return view('admin.testimonial.edit',compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, int $id)
    {
        $testimonial = Testimonial::findOrFail($id);

        $testimonial->update($request->except(['image','published']));

        if($request->published){
            $testimonial->update(['published'=>1]);
        }else{
            $testimonial->update(['published'=>0]);
        }

        if ($request->image) {
            $media = Media::where('model_id',$id);
            $media->delete();

            $testimonial->addMediaFromRequest('image')->toMediaCollection('testimonial');
        }


        return redirect()->route('admin.testimonials.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $category = Testimonial::findOrFail($id);
        $category->delete();

        return redirect()->route('admin.testimonials.index');
    }
}
