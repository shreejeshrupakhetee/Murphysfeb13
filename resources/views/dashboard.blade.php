<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>MurphysHost - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="{{ URL::asset("/fontawesome-free/css/all.min.css") }}" rel="stylesheet" type="text/css" />
  <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    @php $users = DB::table('users')->get(); @endphp

  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.2/font/bootstrap-icons.min.css"
    integrity="sha512-YFENbnqHbCRmJt5d+9lHimyEMt8LKSNTMLSaHjvsclnZGICeY/0KYEeiHwD1Ux4Tcao0h60tdcMv+0GljvWyHg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Custom styles for this template-->
  <link href="{{ URL::asset("/css/style.css") }}" rel="stylesheet" />
</head>

<body id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-nav sidebar sidebar-dark accordion" id="accordionSidebar">
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ URL::asset("dashboard") }}">
        <div class="sidebar-brand-text mx-3">
          <img src="{{ URL::asset("image/logo.png")}}" alt="Brand logo" />
        </div>
      </a>

      <hr class="sidebar-divider d-none d-md-block" />

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item active">
        <a class="nav-link" href="{{ URL::asset("dashboard") }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{URL::asset("dashboard") }}" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
          aria-controls="collapseTwo">
          <i class="bi bi-box-fill mr-2"></i>
          <span>Order New Service</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="collapse-inner rounded">
            <a class="collapse-item" href="https://www.hosting.murphystechnology.com.au/" target="_blank"><i class="bi bi-laptop-fill"></i>Domain Registration</a>
            <a class="collapse-item" href="{{ URL::asset("website-design") }}"><i class="bi bi-laptop-fill"></i>Website
              Development</a>
            <a class="collapse-item" href="{{ URL::asset("web-hosting") }}"><i class="bi bi-laptop-fill"></i>Website Hosting</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{URL::asset("improve-seo")  }}">
          <i class="fas fa-chart-line fa-fw"></i>
          <span>Improve SEO</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ URL::asset("invoice") }}">
          <i class="fas fa-fw fa-file-invoice-dollar"></i>
          <span>Billing</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ URL::asset("refer-friend") }}">
          <i class="fas fa-fw fa-handshake"></i>
          <span>Refer A Friend</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ URL::asset("contact-us")}}" >
          <i class="far fa-fw fa-address-card"></i>
          <span>Contact Us</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ URL::asset("discounts") }}">
          <i class="fas fa-dollar-sign fa-fw"></i>
          <span>Discounts / Coupons</span></a>
      </li>
    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      <!-- Main Content -->
      <div id="content">
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="{{ url("#") }}" id="searchDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                      aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="{{ url("#") }}" id="alertsDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">0</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">Notification Center</h6>

                <a class="dropdown-item text-center medium text-gray-900" href="{{ url("#") }}">Show All Notification</a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="{{ url("#") }}" id="messagesDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-shopping-cart"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">0</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">Cart Center</h6>
                <a class="dropdown-item text-center medium text-gray-900" href="{{ url("#") }}">No cart added</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="{{ url("#") }}" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-800 fw-600 small">  {{ Auth::user()->firstname }} 
                  {{ Auth::user()->lastname }} 
                </span>
                <img class="img-profile rounded-circle" src="{{ URL::asset("/image/undraw_profile.svg") }}" />
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="{{URL::asset("user") }}">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Your Profile
                </a>
                <a class="dropdown-item" href="{{ url("#") }}">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ url("#") }}">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                
                <a class="dropdown-item" href="{{ url("#") }}">
                  <i class="fas fa-lock fa-sm fa-fw mr-2 text-gray-400"></i>
                  Change Password
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{URL::asset("logout")}}" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- End of Topbar -->

        <!-- /.container-fluid -->
        <div class="container">
          <div class="mb-4 mt-5">
            <h1 class="h2 fw-700 mb-1 text-gray-900">My Dashboard</h1>
            <span class="fs-13">Client Area</span>
          </div>
        </div>
        <div class="container">
          <div class="row mt-5">
            <div class="col-xl-4 col-lg-5 pr-4">
              <div class="client-infos">
                <h5 class="fw-600 fs-17 mb-3">
                  Other Information
                </h5>
               
                <p>Status:<span class="text-success">Active</span></p>
                <p>Registered: <span> {{ Auth::user()->created_at }} </span></p>
                <p>Client for: <span>{{ Auth::user()->last_seen }} </span></p>
                <p>Email Verified: <span>Yes</span></p>
              </div>
              <div class="mt-4 pb-2">
                @foreach($users as $user)
                <button type="button" class="btn fs-14 text-success btn-login">
                  Last Login:{{Carbon\Carbon::parse($user->last_seen)->diffForHumans() }}
                </button>
                @endforeach
              </div>
              <div class="card profile-details-card mt-4 shadow mb-4">
                <!-- Card Body -->
                <div class="card-body">
                  <img class="img-profile rounded-circle" src="{{ URL::asset("/image/undraw_profile.svg") }}" />
                  <div class="user-profile-details">
                    <h5 class="fw-600 fs-17 mb-3 mt-3">
                     {{ Auth::user()->firstname }} 
                     {{ Auth::user()->lastname }} 
                    </h5>
                    <p> {{ Auth::user()->streetaddress1 }}  </p>
                    <p> {{ Auth::user()->city }} </p>
                  </div>
                  <div class="mt-4">
                    <a href="{{ URL::asset("user/update") }}" class="btn text-primary fs-14 px-4 btn-update">Update</a>
                    <a href="{{ URL::asset("logout") }}" class="btn fs-14 px-4 btn-outline-logout">Logout</a>
                  </div>
                </div>
              </div>
              <div class="shortcuts-links mb-5 pt-2">
                <h5 class="fw-600 fs-17 mb-3">Shortcuts</h5>
                <div class="shortcut-lists">
                  <div class="d-flex flex-column">
                    <a class="text-decoration-none fw-500 mb-2 text-primary" href="{{ URL::asset("website-design") }}">
                      <i class="fas fa-plus fa-sm fa-fw mr-1"></i>
                      Order New Services
                    </a>
                    <a href="https://www.hosting.murphystechnology.com.au/" target="_blank"
                      class="text-decoration-none fw-500 mb-2 text-primary">
                      <i class="fas fa-tag fa-sm fa-fw mr-1"></i>
                      Domain Registration
                    </a>
                    <a href="{{ URL::asset("logout") }}" class="text-decoration-none fw-500 mb-2 text-primary">
                      <i class="fas fa-sign-out-alt fa-sm fa-fw mr-1"></i>
                      Logout
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-8 col-lg-7">
              <div class="service-slider row mb-4">
                <div class="col-12">
                  <div id="serviceSliderFade" class="carousel slide carousel-fade" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#serviceSliderFade" data-slide-to="0" class="active"></li>
                      <li data-target="#serviceSliderFade" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <div class="carousel-service-img">
                          <img src="{{ URL::asset("/image/slider1.jpg") }}" class="d-block w-100" alt="..." />
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div class="carousel-service-img">
                          <img src="{{ URL::asset("/image/slider2.jpg") }}" class="d-block w-100" alt="..." />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row pt-2">
                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-4 col-md-6 mb-4">
                  <div class="card service-card shadow h-100">
                    <a href="{{ URL::asset("services") }}" class="text-decoration-none">
                      <div class="card-body">
                        <div class="row no-gutters">
                          <div class="col mr-2">
                            <div class="font-weight-bold text-success text-uppercase mb-1">
                              Services
                            </div>
                            <div class="h2 mb-0 font-weight-bold text-gray-800">
                              0
                            </div>
                          </div>
                          <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-4 col-md-6 mb-4">
                  <div class="card service-card shadow h-100">
                    <a href="{{ URL::asset("unpaid-invoice") }}" class="text-decoration-none">
                      <div class="card-body">
                        <div class="row no-gutters">
                          <div class="col mr-2">
                            <div class="font-weight-bold text-info text-uppercase mb-1">
                              Unpaid <br />
                              Invoices
                            </div>
                            <div class="row no-gutters align-items-center">
                              <div class="col-auto">
                                <div class="h2 mb-0 mr-3 font-weight-bold text-gray-800">
                                  0
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>

                <!-- Pending Requests Card Example -->
                <div class="col-xl-4 col-md-6 mb-4">
                  <div class="card service-card shadow h-100">
                    <a href="{{ URL::asset("tickets") }}" class="text-decoration-none">
                      <div class="card-body">
                        <div class="row no-gutters">
                          <div class="col mr-2">
                            <div class="font-weight-bold text-warning text-uppercase mb-1">
                              Tickets
                            </div>
                            <div class="h2 mb-0 font-weight-bold text-gray-800">
                              0
                            </div>
                          </div>
                          <div class="col-auto">
                            <i class="fas fa-tag fa-2x text-gray-300"></i>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2021</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->
    </div>
    <!-- End of Content Wrapper -->
  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="{{ URL::asset("#page-top") }}">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          Select "Logout" below if you are ready to end your current session.
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">
            Cancel
          </button>
          <a class="btn btn-primary" href="{{ URL::asset("logout") }}">Logout</a>
        </div>
      </div>
    </div>
  </div>


  <!-- Bootstrap core JavaScript-->
  <script src="{{ URL::asset("jquery/jquery.min.js")}}"></script>
  <script src="{{ URL::asset("bootstrap/js/bootstrap.bundle.min.js")}}"></script>
</body>

</html>
