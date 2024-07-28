<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CarRequest;
use App\Http\Requests\CategoryRequest;
use App\Models\Car;
use App\Models\Category;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::paginate(10);

        return view('admin.car.index',compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::get();

        return view('admin.car.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $car = Car::create($request->except(['image','active']));

        if($request->active){
            $car->update(['active'=>1]);
        }else{
            $car->update(['active'=>0]);
        }

        if ($request->image) {
            $car->addMediaFromRequest('image')->toMediaCollection('car');
        }

        return redirect()->route('admin.car.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $car = car::findOrFail($id);

        return view('admin.car.index',compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $car = Car::findOrFail($id)->with('media')->firstOrFail();
        $categories = Category::get();

        return view('admin.car.edit',compact('car','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $car = Car::findOrFail($id);

        $car->update($request->except(['image','active']));
        if($request->active){
            $car->update(['active'=>1]);
        }else{
            $car->update(['active'=>0]);
        }

        if ($request->image) {
            $media = Media::where('model_id',$id);
            $media->delete();

            $car->addMediaFromRequest('image')->toMediaCollection('car');
        }

        return redirect()->route('admin.car.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $car = Car::findOrFail($id);

        $car->delete();

        return redirect()->route('admin.car.index');
    }
}
