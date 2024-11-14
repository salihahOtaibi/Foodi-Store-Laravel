@extends('layouts.app')

@section('content')
<section class="d-flex align-items-center" style="background-image: url('https://img.freepik.com/premium-photo/abstract-design-background-with-blue-green-waving-lines-pattern-white-background_1123766-686.jpg?w=996'); background-size: cover; background-position: center; margin-top: 0; padding-top: 0;">
  <div class="container h-100 d-flex justify-content-center align-items-center">
    <div class="row justify-content-center w-100 mb-5">
      <div class="col-md-6 col-lg-5 text-black">

        <div class="px-5 text-center">
          <i class="fas fa-crow fa-2x me-3" style="color: #709085;"></i>
          <span class="h1 fw-bold mb-3 d-block">Foodi.</span>
        </div>

        <div class="card mt-4 p-4 shadow" style="background-color: rgba(255, 255, 255, 0.85);">

          <form method="POST" action="{{ route('register') }}">
            @csrf

            <h3 class="fw-normal mb-3 pb-3 text-center" style="letter-spacing: 1px;">Register</h3>

            <div class="form-outline mb-4">
            <label class="form-label" for="name">Name</label>
              <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" 
                     name="name" value="{{ old('name') }}" required autocomplete="name" autofocus />
              @error('name')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

            <div class="form-outline mb-4">
            <label class="form-label" for="email">Email Address</label>
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                     name="email" value="{{ old('email') }}" required autocomplete="email" />
              @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

            <div class="form-outline mb-4">
            <label class="form-label" for="password">Password</label>
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" 
                     name="password" required autocomplete="new-password" />
              @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

            <div class="form-outline mb-4">
            <label class="form-label" for="password-confirm">Confirm Password</label>
              <input id="password-confirm" type="password" class="form-control" 
                     name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="pt-1 mb-4 text-center">
              <button class="btn btn-info btn-lg btn-block" type="submit">Register</button>
            </div>

            <p class="text-center">Already have an account? <a href="{{ route('login') }}" class="link-info">Sign In</a></p>

          </form>

        </div>

      </div>
    </div>
  </div>
</section>
@endsection
