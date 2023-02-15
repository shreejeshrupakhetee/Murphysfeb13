<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>MurphysHost - Register</title>

  <!-- Custom fonts for this template-->
  <link href="{{ URL::asset("/fontawesome-free/css/all.min.css") }}" rel="stylesheet" type="text/css" />
  <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap"
      rel="stylesheet"
    />

  <!-- Custom styles for this template-->
  <link rel="stylesheet" href="{{ URL:: asset("css/style.css") }}">
</head>

<body class="bg-gradient-primary">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-8 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="p-4">
                  <div class="text-center">
                    <img src="{{ URL::asset('image/logo.png') }}" class="mb-4" alt="Brand Logo" />
                    <h1 class="h4 text-gray-900 mb-5">Create an Account!</h1>
				</div>
			<form action="{{ route('sample.validate_registration') }}" method="POST" class="user">
				@csrf
				<h5 class="mb-3">Personal Information</h5>
                 <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
							<label for="firstName">First Name*</label>
							<input type="text" name="firstname" class="form-control" placeholder="First Name" />
							@if($errors->has('firstname'))
								<span class="text-danger">{{ $errors->first('firstname') }}</span>
							@endif
						</div>
						<div class="col-sm-6">
							<label for="lastName">Last Name*</label>
							<input type="text" name="lastname" class="form-control" placeholder="Last Name" />
							@if($errors->has('lastname'))
								<span class="text-danger">{{ $errors->first('lastname') }}</span>
							@endif
						</div>
				 </div>
				 <div class="form-group row">
					<div class="col-sm-6 mb-3 mb-sm-0">
						<label for="emailAddress">Email Address *</label>
						<input type="text" name="email" class="form-control" placeholder="Email Address" />
						@if($errors->has('email'))
							<span class="text-danger">{{ $errors->first('email') }}</span>
						@endif
					</div>
					<div class="col-sm-6">
						<label for="phoneNumber">Phone Number</label>
						<input type="number" name="phone" class="form-control" placeholder="Phone Number" />
					@if($errors->has('phone'))
						<span class="text-danger">{{ $errors->first('phone') }}</span>
					@endif
					</div>
			 </div>
			 <h5 class="mb-3 mt-5">Billing Address</h5>
			 <div class="form-group row">
				<div class="col-sm-6 mb-3 mb-sm-0">
					<label for="companyName">Company Name (Optional)</label>
					<input type="text" name="companyname" class="form-control" placeholder="Company Name (Optional)" />
					@if($errors->has('companyname'))
						<span class="text-danger">{{ $errors->first('companyname') }}</span>
					@endif
				</div>
				<div class="col-sm-6">
					<label for="taxId">Tax ID (Optional)</label>
					<input type="number" name="taxid" class="form-control" placeholder="Tax ID (Optional)" />
					@if($errors->has('taxid'))
						<span class="text-danger">{{ $errors->first('taxid') }}</span>
					@endif
				</div>
		     </div>
			 <div class="form-group row">
				<div class="col-sm-6 mb-3 mb-sm-0">
					<label for="streetAddress">Street Address</label>
					<input type="text" name="streetaddress1" class="form-control" placeholder="Street Address 1" />
					@if($errors->has('streetaddress1'))
						<span class="text-danger">{{ $errors->first('streetaddress1') }}</span>
					@endif
				</div>
				<div class="col-sm-6">
					<label for="streetAddress2">Street Address 2 (Optional)</label>
					<input type="text" name="streetaddress2" class="form-control" placeholder="Street Address 2" />
					@if($errors->has('streetaddress2'))
						<span class="text-danger">{{ $errors->first('streetaddress2') }}</span>
					@endif
				</div>
		     </div>
			 <div class="form-group row">
				<div class="col-sm-6 mb-3 mb-sm-0">
					<label for="cityName">City *</label>
					<input type="text" name="city" class="form-control" placeholder="City" />
					@if($errors->has('city'))
						<span class="text-danger">{{ $errors->first('city') }}</span>
					@endif
				</div>
				<div class="col-sm-6">
					<div class="row">
					  <div class="col-sm-6">
						<label for="stateName">State *</label>
						<input type="text" name="state" class="form-control" placeholder="State" />
						@if($errors->has('state'))
							<span class="text-danger">{{ $errors->first('state') }}</span>
						@endif
					  </div>
					  <div class="col-sm-6">
						<label for="postCode">Postcode *</label>
						<input type="number" name="postcode" class="form-control" placeholder="Post Code" />
						@if($errors->has('postcode'))
							<span class="text-danger">{{ $errors->first('postcode') }}</span>
						@endif
					  </div>
					</div>
				  </div>
		     </div>
			 <h5 class="mb-3 mt-5">Additional Information</h5>
			 <div class="form-group row">
				<div class="col-sm-6 mb-3 mb-sm-0">
					<label for="surveyinfo" class="col-form-label text-md-end">{{ __('Where did you hear About Us?*') }}</label>

					<select name="surveyinfo" id="surveyinfo" class="form-control form-control-user" @error('surveyinfo') is-invalid @enderror" name="surveyinfo" value="{{ old('surveyinfo') }}" required autocomplete="surveyinfo"/>
					@error('surveyinfo')
							  <span class="invalid-feedback" role="alert">
								  <strong>{{ $message }}</strong>
							  </span>>
							  @enderror
					  <option value="Prefer Not To Say" selected="">Prefer Not To Say</option>  
					  <option value="Google">Google</option>
					  <option value="Bing">Bing</option>
					  <option value="Oz Bargain">Oz Bargain</option>
					  <option value="Whirlpool">Whirlpool</option>
					  <option value="Friend">Friend</option>
					  <option value="LiteSpeed Partner">LiteSpeed Partner</option>
					  <option value="Australian Web Industry">Australian Web Industry</option>
					  <option value="Serchen">Serchen</option>
					  <option value="Facebook">Facebook</option>
					  <option value="Instagram">Instagram</option>
					  <option value="Linked In">Linked In</option>
					  <option value="Low End Talk">Low End Talk</option>
					  <option value="Cheap Cheap Lah">Cheap Cheap Lah</option>
					  <option value="Choice Cheapies">Choice Cheapies</option>
					  <option value="Low End Box">Low End Box</option>
					  <option value="Other">Other</option>
					</select>

				</div>
				<div class="col-sm-6">
					<label for="currencyname" class="col-form-label text-md-end">{{ __('Choose Currency*') }}</label>
					<select name="currencyname" id="currencyname" class="form-control form-control-user" @error('currencyname') is-invalid @enderror" name="currencyname" value="{{ old('currencyname') }}" required autocomplete="currencyname"/>
					@error('currencyname')
							  <span class="invalid-feedback" role="alert">
								  <strong>{{ $message }}</strong>
							  </span>>
							  @enderror
					  <option value="AUD">AUD</option>
					  <option value="NZD">NZD</option>
					  <option value="USD">USD</option>
					  <option value="SGD">SGD</option>
					</select>
				</div>
		     </div>
			 <h5 class="mb-3 mt-5">Account Security</h5>
			  <div class="form-group row">
				<div class="col-sm-12 mb-3 mb-sm-0">
					<label for="password">Password *</label>
					<input type="password" name="password" class="form-control" placeholder="Password" />
					@if($errors->has('password'))
						<span class="text-danger">{{ $errors->first('password') }}</span>
					@endif
				</div>
		
		     </div>
			 <h5 class="mb-3 mt-5">Join our mailing list</h5>
			 <p class="mb-4">
				We would like to send you occasional news, information
				and special offers by email. To join our mailing list,
				simply tick the box below. You can unsubscribe at any
				time.
			  </p>
			  <div class="switch-email mb-4">
				<span>Receive Emails:</span>
				<div class="custom-control custom-switch">
				  <input type="checkbox" class="custom-control-input" id="customSwitch1">
				  <label class="custom-control-label" for="customSwitch1"></label>
				</div>
			  </div>
			  <div class="form-group mb-4">
				<div class="custom-control custom-checkbox small">
				  <input type="checkbox" class="custom-control-input" id="customCheck">
				  <label class="custom-control-label" for="customCheck">I have read and agree to the
					<a href="#">Terms of Service *</a></label>
				</div>
			  </div>
			  
			</form>
			<div class="form-group row">
				<div class="col-12">
					<button type="submit" class="btn btn-primary btn-user btn-block">Register</button>
				</div>			
			
			</div>
			<hr>
			<div class="row">
				<div class="col-lg-6">
				  <a href="index" class="btn btn-google btn-user btn-block">
					<i class="fab fa-google fa-fw"></i> Register with
					Google
				  </a>
				</div>
				<div class="col-lg-6">
				  <a href="index" class="btn btn-facebook btn-user btn-block">
					<i class="fab fa-facebook-f fa-fw"></i> Register
					with Facebook
				  </a>
				</div>
			  </div>
			  <hr>		

			<hr />
			<div class="text-center">
			  @if (Route::has('password.request'))
				<a class="small" href="{{ route('password.request') }}">
					{{ __('Forgot Your Password?') }}
				</a>
			@endif
			</div>
			<div class="text-center">
			  <a class="small" href="login">Already have an account? Login!</a>
			</div>
		
		</div>
	  </div>
	</div>
  </div>
</div>
</div>
</div>
<!-- Bootstrap core JavaScript-->
<script src="{{ URL::asset("jquery/jquery.min.js")}}"></script>
<script src="{{ URL::asset("bootstrap/js/bootstrap.bundle.min.js")}}"></script>
</body>
</html>