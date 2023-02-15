<html lang="en">
    <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <meta name="description" content="" />
      <meta name="author" content="" />
    
      <title>MurphysHost - Admin Dashboard</title>
    
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
          <a class="sidebar-brand d-flex align-items-center justify-content-center">
            <div class="sidebar-brand-text mx-3">
              <img src="{{ URL::asset("image/logo.png")}}" alt="Brand logo" />
            </div>
          </a>
          <hr class="sidebar-divider d-none d-md-block" />
          <!-- Nav Item - Pages Collapse Menu -->
          <li class="nav-item active">
            <a class="nav-link" href="{{ URL::asset("/manager/home") }}">
              <i class="fas fa-fw fa-tachometer-alt"></i>
              <span>Admin Dashboard </span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link collapsed" href="{{URL::asset("/manager/home")}}" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
              aria-controls="collapseTwo">
              <i class="bi bi-box-fill mr-2"></i>
              <span>User Management</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
              <div class="collapse-inner rounded">
                <a class="collapse-item" href="https://www.hosting.murphystechnology.com.au/" target="_blank"><i class="bi bi-laptop-fill"></i>Domain Registration</a>
                <a class="collapse-item" href="{{ url("showuser") }}"><i class="bi bi-laptop-fill"></i>Show User</a>
               </div>
            </div>
          </li>
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
                      Admin Profile
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
                <h1 class="h2 fw-700 mb-1 text-gray-900">Admin Dashboard</h1>
                <span class="fs-13">Admin Area</span>
              </div>
            </div>
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
                        <a href="{{ URL::asset("logout") }}" class="btn fs-14 px-4 btn-outline-logout">Logout</a>
                      </div>
                    </div>
                  </div>
                        <a href="{{ URL::asset("logout") }}" class="text-decoration-none fw-500 mb-2 text-primary">
                          <i class="fas fa-sign-out-alt fa-sm fa-fw mr-1"></i>
                          Logout
                        </a>
                      </div>
                       <div class="col-auto">
                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
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
    