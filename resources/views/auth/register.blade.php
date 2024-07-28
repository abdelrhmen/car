@extends('layouts.admin.login')

@section('content')

<section class="login_content">
    <form method="POST" action="{{ route('register') }}">
        @csrf
      <h1>Register Form</h1>

      <div>
        <input  type="email" class="form-control  @error('email') is-invalid @enderror" placeholder="Email" name="email"  required autocomplete="email" autofocus>

        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>
      <div>
        <input  type="full_name" class="form-control my-3 @error('full_name') is-invalid @enderror" name="full_name"  placeholder="Full Name" value="{{ old('full_name') }}" required>

        @error('full_name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>
      <div>
        <input  type="user_name" class="form-control @error('user_name') is-invalid @enderror" name="user_name" placeholder="User Name" value="{{ old('user_name') }}" required>

        @error('user_name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>
      <div>
        <input id="password" type="password" class="form-control my-3 @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>

      <div>
        <button type="submit" class="btn btn-default submit"> Register</button>
        <a href="{{route('login')}}" class="to_register"> Login </a>
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
