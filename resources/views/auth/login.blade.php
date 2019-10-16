@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <div class="card bg-white-border">
        <div class="card-header bg-transparent border-0">{{ __('Login') }}</div>

        <div class="card-body">
          <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group row">

              <div class="col-md-12">
                <label for="email" class="col-sm-12 col-form-label pl-0">{{ __('E-Mail Address') }}</label>
                <br>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
              
                @error('email')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>

            </div>

            <div class="form-group row">

              <div class="col-md-12">
                <label for="password" class="col-md-4 col-form-label text-md-left pl-0">{{ __('Password') }}</label>
                <br>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
              
                @error('password')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>

            </div>

            <div class="form-group row">
              <div class="col-md-12">
                <div class="checkbox">
                  <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                  <label for="remember">
                    {{ __('Remember Me') }}
                  </label>
                </div>
              </div>
            </div>

            <div class="form-group row mb-0">
              <div class="col-md-12">
                <button type="submit" class="btn-block btn btn-primary">
                  {{ __('Login') }}
                </button>
                <br>

                @if (Route::has('password.request'))
                  <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                  </a>
                @endif
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
