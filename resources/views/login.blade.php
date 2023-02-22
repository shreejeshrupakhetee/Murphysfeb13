<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Murphys Host - Login</title>

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
    <!-- Outer Row -->
    <div class="row justify-content-center">
      <div class="col-xl-5 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <img src="{{ URL::asset('image/logo.png') }}" class="mb-4" alt="Brand Logo" />
                    <h1 class="h4 text-gray-900 mb-4">Secure Login</h1>
                  </div>
                  <form class="user" action="{{route('sample.validate_login')}}" method="POST" >
                    @csrf
                    <div class="form-group">
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder='Email'>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div class="form-group">
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder='Password'>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      {{ __('Login') }}
                  </button>
                    <hr />
                    <a href="home" class="btn btn-google btn-user btn-block">
                      <i class="fab fa-google fa-fw"></i> Login with Google
                    </a>
                    <a href="home" class="btn btn-facebook btn-user btn-block">
                      <i class="fab fa-facebook-f fa-fw"></i> Login with
                      Facebook
                    </a>
                  </form>
                  <hr />
                  <div class="text-center">
                      <a class="small" href="{{URL::asset("forget-password") }}"> Forgot your password ?
                      </a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="{{URL::asset("registration") }}">Create an Account!</a>
                  </div>
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