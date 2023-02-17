<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>MurphysHost - Discounts / Coupons</title>

    <!-- Custom fonts for this template-->
    <link href="{{ URL::asset("/fontawesome-free/css/all.min.css") }}" rel="stylesheet" type="text/css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.2/font/bootstrap-icons.min.css"
        integrity="sha512-YFENbnqHbCRmJt5d+9lHimyEMt8LKSNTMLSaHjvsclnZGICeY/0KYEeiHwD1Ux4Tcao0h60tdcMv+0GljvWyHg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom styles for this template-->
    <link href={{ URL::asset ("css/style.css")}} rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-nav sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ URL::asset("dashboard")}}">
                <div class="sidebar-brand-text mx-3">
                    <img src="{{ URL::asset("image/logo.png")}}" alt="Brand logo" />
                </div>
            </a>

            <hr class="sidebar-divider d-none d-md-block" />

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="{{ URL::asset("dashboard") }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="bi bi-box-fill mr-2"></i>
                    <span>Order New Service</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="collapse-inner rounded">
                        <a class="collapse-item" href="https://www.hosting.murphystechnology.com.au/" target="_blank"><i class="fas fa-tag"></i>Domain Registration</a>
        
                        <a class="collapse-item" href="{{URL::asset("website-design")}}"><i
                                class="bi bi-laptop-fill"></i>Website Development</a>
                        <a class="collapse-item" href="{{URL::asset("web-hosting")}}"><i class="bi bi-laptop-fill"></i>Website Hosting</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{URL::asset("improve-seo")}}">
                    <i class="fas fa-chart-line fa-fw"></i>
                    <span>Improve SEO</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-file-invoice-dollar"></i>
                    <span>Billing</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{URL::asset("refer-friend")}}">
                    <i class="fas fa-fw fa-handshake"></i>
                    <span>Refer A Friend</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{URL::asset("contact-us")}}">
                    <i class="far fa-fw fa-address-card"></i>
                    <span>Contact Us</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{URL::asset("discounts")}}">
                    <i class="fas fa-dollar-sign fa-fw"></i>
                    <span>Discounts / Coupons</span></a>
            </li>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column discount-wrapper">
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
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2" />
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
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">0</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">Notification Center</h6>

                                <a class="dropdown-item text-center medium text-gray-900" href="#">Show All
                                    Notification</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-shopping-cart"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">0</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">Cart Center</h6>
                                <a class="dropdown-item text-center medium text-gray-900" href="#">No cart added</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-800 fw-600 small"> {{ Auth::user()->firstname }} 
                                    {{ Auth::user()->lastname }} 
                                </span>
                                <img class="img-profile rounded-circle" src="{{ URL::asset("image/undraw_profile.svg")}}" />
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">

                                <a class="dropdown-item" href="{{URL::asset("user") }}">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Your Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-lock fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Change Password
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{URL::asset("logout") }}"data-toggle="modal" data-target="#logoutModal">
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
                    <div class="row discount-wrapper">
                        <div class="col-12 text-center my-3">
                            <img src="{{ URL::asset("image/discount.jpg")}}" class="mb-2" alt="Discount Image">
                            <div class="my-4">
                                <h2 class="h3  h-primary">Post your review on Instagram or Google and
                                    <br />get
                                    a 20% off
                                    coupon!
                                </h2>

                                <p class="w-50 mx-auto  my-4 fw-600 text-gray-900">
                                    Murphys Host is a growing provider, and it’s crucial for us to continue growing and
                                    improving our services. If you like us, please help us by leaving a review
                                    describing your experience.
                                </p>
                                <p class="w-50 mx-auto  my-4 fw-600 text-gray-900">
                                    In return, we’ll be glad to organise a <span class="fw-700 h-primary">20%
                                        coupon.</span>
                                </p>
                                <p class="w-50 mx-auto  my-4 fw-600 text-gray-900">
                                    Please reach out with a screenshot, and we’ll send over the coupon.
                                </p>
                                <div class="container-fluid d-flex justify-content-center w-25 mx-auto align-items-center">
                                    <a class="btn btn-primary" target='_' id='instagram-btn' style="background-color: #ac2bac;" href="https://www.instagram.com/murphystechnology/" role="button">Instagram</a>
                                        
                                    </a>
                                    <a href="https://www.google.com/search?q=murphystechnology&oq=murphystechnology+&aqs=chrome..69i57j69i60l4.3280j0j1&sourceid=chrome&ie=UTF-8#lrd=0x6b12bbd91afdc181:0xb17c84cb35b6c196,3,,,"
                                        class="btn btn-google btn-user btn-block mt-0" id='google-btn'>
                                        Google
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- facebook and google reviews -->
                <div class="container review-container">

                    <div id='google-review-card'>
                        <a href="https://www.google.com/search?q=murphystechnology&oq=murphystechnology+&aqs=chrome..69i57j69i60l4.3280j0j1&sourceid=chrome&ie=UTF-8#lrd=0x6b12bbd91afdc181:0xb17c84cb35b6c196,3,,," class="review-card google-card">
                            <img src="{{ URL::asset("image/google.png")}}" class="mr-2" alt="google image">
                            <div class="ml-1">
                                <p class="mb-0 fs-14">Google Rating</p>
                                <div class="d-flex">
                                    <h4 class="mb-0 mr-2">4.9</h4>
                                    <div>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <p class="mb-0 fs-14 text-gary-800">Based on 100 reviews</p>
                            </div>
                        </a>
                    </div>
                    <div id='instagram-review-card'>
                        <a href="https://www.instagram.com/murphystechnology/" class="review-card instagram-card">
                            <img src="{{ URL::asset("image/instagram.png")}}" class="mr-2" alt="instagram image">
                            <div class="ml-1">
                                <p class="mb-0 fs-14">Instagram Rating</p>
                                <div class="d-flex">
                                    <h4 class="mb-0 mr-2">4.9</h4>
                                    <div>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <p class="mb-0 fs-14 text-gray-800">Based on 100 reviews</p>
                            </div>
                        </a>
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
        <a class="scroll-to-top rounded" href="#page-top">
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
                        <a class="btn btn-primary" href="{{ URL::asset("logout")}}">Logout</a>
                    </div>
                </div>
            </div>
        </div>

         <!--overlay element-->
  <div class="body-overlay">
  </div> 

        <!--external javascript file-->
        <script src="{{URL::asset('js/main.js')}}"></script>
        <!-- Bootstrap core JavaScript-->
        <script src="{{ URL::asset("jquery/jquery.min.js")}}"></script>
        <script src="{{ URL::asset("bootstrap/js/bootstrap.bundle.min.js")}}"></script>
</body>

</html>