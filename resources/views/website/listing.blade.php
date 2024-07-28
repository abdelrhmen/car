@extends('layouts.website.app')
@section('content')


      <div class="hero inner-page" style="background-image: url('{{asset('website/images/hero_1_a.jpg')}}');">

        <div class="container">
          <div class="row align-items-end ">
            <div class="col-lg-5">

              <div class="intro">
                <h1><strong>Listings</strong></h1>
                <div class="custom-breadcrumbs"><a href="{{route('home')}}">Home</a> <span class="mx-2">/</span> <strong>Listings</strong></div>
              </div>

            </div>
          </div>
        </div>
      </div>






    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <h2 class="section-heading"><strong>Car Listings</strong></h2>
            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          </div>
        </div>


        <div class="row">
          @foreach ($cars as $car)
          <div class="col-md-6 col-lg-4 mb-4">

            <div class="listing d-block  align-items-stretch">
                <div class="listing-img h-100 mr-4">
                    @foreach ($car->media as $media)
                    <a href="{{route('car',$car->id)}}">
                  <img src="{{$media->original_url}}" alt="Image" class="img-fluid">
                </a>
                  @endforeach
                </div>
              <div class="listing-contents h-100">
                <h3>{{$car->title}}</h3>
                <div class="rent-price">
                  <strong>${{$car->price}}</strong><span class="mx-1">/</span>day
                </div>
                <div class="d-block d-md-flex mb-3 border-bottom pb-3">
                  <div class="listing-feature pr-4">
                    <span class="caption">Luggage:</span>
                    <span class="number">{{$car->luggage}}</span>
                  </div>
                  <div class="listing-feature pr-4">
                    <span class="caption">Doors:</span>
                    <span class="number">{{$car->Doors}}</span>
                  </div>
                  <div class="listing-feature pr-4">
                    <span class="caption">Passenger:</span>
                    <span class="number">{{$car->passengers}}</span>
                  </div>
                </div>
                <div>
                    <p><p>{{ substr($car->content, 0, 100) }}</p></p>
                    <p><a href="{{route('car',$car->id)}}" class="btn btn-primary btn-sm">Rent Now</a></p>
                </div>
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



    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <h2 class="section-heading"><strong>Testimonials</strong></h2>
            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          </div>
        </div>
        <div class="row">
            @foreach ($testimonials as $testimonial)
            <div class="col-lg-4 mb-4 mb-lg-0">
              <div class="testimonial-2">
                <blockquote class="mb-4">
                  <p>"{{$testimonial->content}}"</p>
                </blockquote>
                <div class="d-flex v-card align-items-center">
                    @foreach ($testimonial->media as $media)
                  <img src="{{$media->original_url}}" alt="Image" class="img-fluid mr-3">
                  @endforeach
                  <div class="author-name">
                    <span class="d-block">Mike Fisher</span>
                    <span>Owner, Ford</span>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
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
