@extends('layouts.website.app')
@section('content')

<div class="hero inner-page" style="background-image: url('{{asset('website/images/hero_1_a.jpg')}}');">

        <div class="container">
          <div class="row align-items-end ">
            <div class="col-lg-5">

              <div class="intro">
                <h1><strong>Blog</strong></h1>
                <div class="custom-breadcrumbs"><a href="route('home')">Home</a> <span class="mx-2">/</span> <strong>Blog</strong></div>
              </div>

            </div>
          </div>
        </div>
      </div>


    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
            @foreach ($cars as $car)
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="post-entry-1 h-100">
                @foreach ($car->media as $media)
              <a href="{{route('car',$car->id)}}">
                <img src="{{$media->original_url}}" alt="Image"
                 class="img-fluid">
              </a>
            @endforeach
              <div class="post-entry-1-contents">

                <h2><a href="{{route('about')}}">{{$car->title}}</a></h2>
                <span class="meta d-inline-block mb-3">{{$car->created_at}}<span class="mx-2">by</span> <a href="#">Admin</a></span>
                <p><p>{{ substr($car->content, 0, 100) }}</p></p>
              </div>
            </div>
          </div>
          @endforeach


        </div>

        <div class="row">
            <div class="col-12">
                {{ $cars->links() }}
            </div>
        </div>

      </div>
    </div>

    <div class="site-section bg-primary py-5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7 mb-4 mb-md-0">
            <h2 class="mb-0 text-white">What are you waiting for?</h2>
            <p class="mb-0 opa-7">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.</p>
          </div>
          <div class="col-lg-5 text-md-right">
            <a href="{{route('contact')}}" class="btn btn-primary btn-white">Rent a car now</a>
          </div>
        </div>
      </div>
    </div>

    @endsection
