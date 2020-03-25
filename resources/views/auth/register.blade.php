@extends('layouts.login_app')
@section('title') Register @endsection
@section('content')

	<div class="login-box">
	  <div class="login-logo">
	    <a href="{{ url('/') }}"><b>{{config('app.name')}}</b> LTE</a>
	  </div>
	  <!-- /.login-logo -->
	  <div class="card">
	    <div class="card-body login-card-body">
	      <p class="login-box-msg">{{ __('Register') }} a new membership</p>

				<form method="POST" action="{{ route('register') }}">
						@csrf

						<div class="input-group mb-3">
							<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="westwood james ..."  required autocomplete="name" autofocus>

							 @error('name')
									 <span class="invalid-feedback" role="alert">
											 <strong>{{ $errors->first('name') }}</strong>
									 </span>
							 @enderror
		          <div class="input-group-append">
		            <div class="input-group-text">
		              <span class="fas fa-user">{{ __('Fullname') }}</span>
		            </div>
		          </div>
		        </div>
						<div class="input-group mb-3">
							<input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" placeholder="wewood3wwd ..."  required autocomplete="name" autofocus>

							@error('username')
									<span class="invalid-feedback" role="alert">
											<strong>{{ $errors->first('username') }}</strong>
									</span>
							@enderror
							<div class="input-group-append">
								<div class="input-group-text">
									<span class="fas fa-user">{{ __('Username') }}</span>
								</div>
							</div>
						</div>
		        <div class="input-group mb-3">
							<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="emi@gmail.com ..."  required autocomplete="email">

							@error('email')
									<span class="invalid-feedback" role="alert">
											<strong>{{ $errors->first('email') }}</strong>
									</span>
							@enderror
		          <div class="input-group-append">
		            <div class="input-group-text">
		              <span class="fas fa-envelope">{{ __(' Email') }}</span>
		            </div>
		          </div>
		        </div>
						<div class="input-group mb-3">
							<input id="phone_no" type="text" class="form-control" name="phone_no" value="{{ old('phone_no') }}" placeholder="0802334 ..."  required autofocus>

							@if ($errors->has('phone_no'))
							<span class="invalid-feedback" role="alert">
											<strong>{{ $errors->first('phone_no') }}</strong>
									</span>
							@endif
						 <div class="input-group-append">
							 <div class="input-group-text">
								 <span class="fas fa-envelope">{{ __('Phone Number') }}</span>
							 </div>
						 </div>
					 </div>
		        <div class="input-group mb-3">
							<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="scaqfe54994a ..."  required autocomplete="new-password">

							 @error('password')
									 <span class="invalid-feedback" role="alert">
											 <strong>{{ $errors->first('password') }}</strong>
									 </span>
							 @enderror
		          <div class="input-group-append">
		            <div class="input-group-text">
		              <span class="fas fa-lock">{{ __('Password') }}</span>
		            </div>
		          </div>
		        </div>
		        <div class="input-group mb-3">
							<input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="scaqfe54994a ..."  required autocomplete="new-password">
			 		          <div class="input-group-append">
		            <div class="input-group-text">
		              <span class="fas fa-lock">{{ __('Confirm Password') }}</span>
		            </div>
		          </div>
		        </div>
		        <div class="row">
		          {{-- <div class="col-8">
		            <div class="icheck-primary">
		              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
		              <label for="agreeTerms">
		               I agree to the <a href="#">terms</a>
		              </label>
		            </div>
		          </div> --}}
		          <!-- /.col -->
		          <div class="col-4">
		            <button type="submit" class="btn btn-primary btn-block">		{{ __('Register') }}</button>
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

@endsection
