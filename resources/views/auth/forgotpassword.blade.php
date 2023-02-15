<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>MurphysHost - Forgot Password</title>

  <!-- Custom fonts for this template-->
  <link href="{{ URL::asset("/fontawesome-free/css/all.min.css") }}" rel="stylesheet" type="text/css" />
  <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap"
      rel="stylesheet"
    />

  <!-- Custom styles for this template-->
  <link href="{{ URL::asset("/css/style.css") }}"  rel="stylesheet" />
</head>

<body class="bg-gradient-primary">
  <div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
      <div class="col-xl-5 col-lg-12 col-md-9 d-flex align-items-center h-full">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ URL::asset("dashboard") }}">
                  <div class="text-center">
                    <img src="{{ URL::asset("image/logo.png")}}" class="mb-4" alt="Brand Logo" />
                  </a>
                    <h1 class="h4 text-gray-900 mb-3">
                      Forgot Your Password?
                    </h1>
                    <p class="mb-4">
                      We get it, stuff happens. Just enter your email address
                      below and we'll send you a link to reset your password!
                    </p>
                  </div>
                  @if (Session::has('message'))
                         <div class="alert alert-success" role="alert">
                            {{ Session::get('message') }}
                        </div>
                    @endif
  
                      <form action="{{ route('forget.password.post') }}" method="POST">
                          @csrf
                          <div class="form-group row">
                        
                              <div class="col-md-12">
                                {{-- <label for="email_address">E-Mail Address</label> --}}
                                  <input type="text" id="email_address" placeholder="Enter Email Address" class="form-control" name="email" required autofocus>
                                  @if ($errors->has('email'))
                                      <span class="text-danger">{{ $errors->first('email') }}</span>
                                  @endif
                              </div>
                          </div>
                          <div class="col-md-12 px-0">
                              <button type="submit" class="btn btn-primary btn-user btn-block">
                                   Reset Password
                              </button>
                          </div>
                      </form>
                        
                  <hr />
                  <div class="text-center">
                    <a class="small" href="{{ URL::asset("registration") }}">Create an Account!</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="{{ URL::asset("login") }}">Already have an account? Login!</a>
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