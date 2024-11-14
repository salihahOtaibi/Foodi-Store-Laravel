@extends('layouts.app')

@section('content')
<section class="vh-100">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 text-black">

        <div class="px-5 ms-xl-4">
            <!-- <img src="{{asset('images/Logo.png')}}" height="85" width="120" alt="Logo" /> -->
            <span class="h1 fw-bold mb-0">Foodi.</span>
        </div>

        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-3 pt-5 pt-xl-0 mt-xl-n5">
          
          <form method="POST" action="{{ route('login') }}" style="width: 23rem;">
            @csrf

            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h3>

            <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="form2Example18">Email address</label>
              <input type="email" id="form2Example18" class="form-control form-control-lg @error('email') is-invalid @enderror" 
                     name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
              @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

            <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="form2Example28">Password</label>
              <input type="password" id="form2Example28" class="form-control form-control-lg @error('password') is-invalid @enderror" 
                     name="password" required autocomplete="current-password" />
              @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

            <div class="form-check mb-4">
              <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
              <label class="form-check-label" for="remember">
                {{ __('Remember Me') }}
              </label>
            </div>

            <div class="pt-1 mb-4">
              <button class="btn btn-info btn-lg btn-block" type="submit">Login</button>
            </div>

            @if (Route::has('password.request'))
              <p class="small">
                <a class="text-muted" href="{{ route('password.request') }}">Forgot password?</a>
              </p>
              
            @endif
            <p class="text-muted">Don't have an account? <a href="{{ route('register') }}" class="link-info">Register here</a></p>

          </form>

        </div>

      </div>
      <div class="col-sm-6 px-0 d-none d-sm-block">
        <img src="https://img.freepik.com/free-vector/delivery-service-with-man-scooter-mask_23-2148496524.jpg?t=st=1731530030~exp=1731533630~hmac=238cb0a004d2479feb400fdc771a2f68f96011a98425750c59e4e7c9758c59f4&w=740"
             alt="Login image" class="w-100 vh-100 rounded" style="object-fit: cover; object-position: left;">
      </div>
    </div>
  </div>
</section>
@endsection
