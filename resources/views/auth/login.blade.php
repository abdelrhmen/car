@extends('layouts.admin.login')

@section('content')

<section class="login_content">
    <form method="POST" action="{{ route('login') }}">
        @csrf
      <h1>Login Form</h1>
      <div>
        <input  type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" autofocus>

        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>
      <div>
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>
      <div>
        <button type="submit" class="btn btn-default submit">Log in</button>

        <a href="{{route('register')}}" class="to_register"> Create Account </a>
      </div>


        <div class="clearfix"></div>
        <br />

        <div>
          <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
          <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 4 template. Privacy and Terms</p>
        </div>
      </div>
    </form>
  </section>





@endsection
