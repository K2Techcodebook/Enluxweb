@extends('layouts.login_app')
@section('title') Login @endsection
@section('content')

	<div class="login-box">
	  <div class="login-logo">
	    <a href="{{ url('/') }}"><b>{{config('app.name')}}</b>LTE</a>
	  </div>
	  <!-- /.login-logo -->
	  <div class="card">
	    <div class="card-body login-card-body">
	      <p class="login-box-msg">{{ __('Login') }} in to start your session</p>

				<form method="POST" action="{{ route('login') }}">
						@csrf
	        <div class="input-group mb-3">
						<input id="login" type="text"
									 class="form-control{{ $errors->has('username') || $errors->has('email') ? ' is-invalid' : '' }}"
									 name="login" value="{{ old('username') ?: old('email') }}" required autofocus>

						@if ($errors->has('username') || $errors->has('email'))
								<span class="invalid-feedback">
										<strong>{{ $errors->first('username') ?: $errors->first('email') }}</strong>
								</span>
						@endif
	          <div class="input-group-append">
	            <div class="input-group-text">
	              <span class="fas fa-envelope">  {{ __('Username or Email') }}</span>
	            </div>
	          </div>
	        </div>
	        <div class="input-group mb-3">
						<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

						@error('password')
								<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
								</span>
						@enderror
	          <div class="input-group-append">
	            <div class="input-group-text">
	              <span class="fas fa-lock">{{ __('Password') }}</span>
	            </div>
	          </div>
	        </div>
	        <div class="row">
	          <div class="col-8">
	            <div class="icheck-primary">
								<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

	              <label for="remember">
	                 {{ __('Remember Me') }}
	              </label>
	            </div>
	          </div>
	          <!-- /.col -->
	          <div class="col-4">
	            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
	          </div>
	          <!-- /.col -->
	        </div>
	      </form>

	      {{-- <div class="social-auth-links text-center mb-3">
	        <p>- OR -</p>
	        <a href="#" class="btn btn-block btn-primary">
	          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
	        </a>
	        <a href="#" class="btn btn-block btn-danger">
	          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
	        </a>
	      </div> --}}
	      <!-- /.social-auth-links -->

	      <p class="mb-1">
					@if (Route::has('password.request'))
							<a class="btn btn-link" href="{{ route('password.request') }}">
									{{ __('Forgot Your Password?') }}
							</a>
					@endif
	      </p>
	      <p class="mb-0">
	        {{-- <a href="register.html" class="text-center">Register a new membership</a> --}}
	      </p>
	    </div>
	    <!-- /.login-card-body -->
	  </div>
	</div>
	<!-- /.login-box -->

	{{-- <div class="login-box">
	  <div class="login-logo">
	    <a href="../../index2.html"><b>Admin</b>LTE</a>
	  </div>
	  <!-- /.login-logo -->
	  <div class="card">
	    <div class="card-body login-card-body">
	      <p class="login-box-msg">Sign in to start your session</p>

	      <form action="../../index3.html" method="post">
	        <div class="input-group mb-3">
	          <input type="email" class="form-control" placeholder="Email">
	          <div class="input-group-append">
	            <div class="input-group-text">
	              <span class="fas fa-envelope"></span>
	            </div>
	          </div>
	        </div>
	        <div class="input-group mb-3">
	          <input type="password" class="form-control" placeholder="Password">
	          <div class="input-group-append">
	            <div class="input-group-text">
	              <span class="fas fa-lock"></span>
	            </div>
	          </div>
	        </div>
	        <div class="row">
	          <div class="col-8">
	            <div class="icheck-primary">
	              <input type="checkbox" id="remember">
	              <label for="remember">
	                Remember Me
	              </label>
	            </div>
	          </div>
	          <!-- /.col -->
	          <div class="col-4">
	            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
	          </div>
	          <!-- /.col -->
	        </div>
	      </form>

	      <div class="social-auth-links text-center mb-3">
	        <p>- OR -</p>
	        <a href="#" class="btn btn-block btn-primary">
	          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
	        </a>
	        <a href="#" class="btn btn-block btn-danger">
	          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
	        </a>
	      </div>
	      <!-- /.social-auth-links -->

	      <p class="mb-1">
	        <a href="forgot-password.html">I forgot my password</a>
	      </p>
	      <p class="mb-0">
	        <a href="register.html" class="text-center">Register a new membership</a>
	      </p>
	    </div>
	    <!-- /.login-card-body -->
	  </div>
	</div>
	<!-- /.login-box --> --}}

@endsection
