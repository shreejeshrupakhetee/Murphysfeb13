<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>MurphysHost - Contact</title>

    <!-- Custom fonts for this template-->
    <link
      href="{{ URL::asset("/fontawesome-free/css/all.min.css") }}"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap"
      rel="stylesheet"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.2/font/bootstrap-icons.min.css"
      integrity="sha512-YFENbnqHbCRmJt5d+9lHimyEMt8LKSNTMLSaHjvsclnZGICeY/0KYEeiHwD1Ux4Tcao0h60tdcMv+0GljvWyHg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <!-- Custom styles for this template-->
    <link href="{{ URL::asset("/css/style.css") }}"  rel="stylesheet" />
  </head>

  <body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
      <!-- Sidebar -->
      <ul
        class="navbar-nav bg-nav sidebar sidebar-dark accordion"
        id="accordionSidebar"
      >
        <!-- Sidebar - Brand -->
        <a
          class="sidebar-brand d-flex align-items-center justify-content-center"
          href="{{ URL::asset("dashboard") }}"
        >
          <div class="sidebar-brand-text mx-3">
            <img src="{{ URL::asset("image/logo.png")}}" alt="Brand logo" />
          </div>
        </a>

        <hr class="sidebar-divider d-none d-md-block" />

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link" href="{{ URL::asset("dashboard") }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a
          >
        </li>
        <li class="nav-item">
          <a
            class="nav-link collapsed"
            href="#"
            data-toggle="collapse"
            data-target="#collapseTwo"
            aria-expanded="true"
            aria-controls="collapseTwo"
          >
            <i class="bi bi-box-fill mr-2"></i>
            <span>Order New Service</span>
          </a>
          <div
            id="collapseTwo"
            class="collapse"
            aria-labelledby="headingTwo"
            data-parent="#accordionSidebar"
          >
            <div class="collapse-inner rounded">
              <a
                class="collapse-item"
                href="https://www.hosting.murphystechnology.com.au/"
                target="_blank"
                ><i class="fas fa-tag"></i>Domain Registration</a>
              <a class="collapse-item" href="{{ URL::asset("website-design") }}"
                ><i class="bi bi-laptop-fill"></i>Website Development</a>
              <a class="collapse-item" href="{{ URL::asset("web-hosting") }}"
                ><i class="bi bi-laptop-fill"></i>Website Hosting</a>
            </div>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ URL::asset("improve-seo") }}">
            <i class="fas fa-chart-line fa-fw"></i>
            <span>Improve SEO</span></a
          >
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-file-invoice-dollar"></i>
            <span>Billing</span></a
          >
        </li>

        <li class="nav-item active">
          <a class="nav-link" href="#">
            <i class="fas fa-fw fa-handshake"></i>
            <span>Refer A Friend</span></a
          >
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ URL::asset("contact-us") }}">
            <i class="far fa-fw fa-address-card"></i>
            <span>Contact Us</span></a
          >
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ URL::asset("discounts") }}">
            <i class="fas fa-dollar-sign fa-fw"></i>
            <span>Discounts / Coupons</span></a
          >
        </li>
      </ul>
      <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
          <!-- Topbar -->
          <nav
            class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow"
          >
            <!-- Sidebar Toggle (Topbar) -->
            <button
              id="sidebarToggleTop"
              class="btn btn-link d-md-none rounded-circle mr-3"
            >
              <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
              <!-- Nav Item - Search Dropdown (Visible Only XS) -->
              <li class="nav-item dropdown no-arrow d-sm-none">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="searchDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i class="fas fa-search fa-fw"></i>
                </a>
                <!-- Dropdown - Messages -->
                <div
                  class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                  aria-labelledby="searchDropdown"
                >
                  <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                      <input
                        type="text"
                        class="form-control bg-light border-0 small"
                        placeholder="Search for..."
                        aria-label="Search"
                        aria-describedby="basic-addon2"
                      />
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
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="alertsDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i class="fas fa-bell fa-fw"></i>
                  <!-- Counter - Alerts -->
                  <span class="badge badge-danger badge-counter">0</span>
                </a>
                <!-- Dropdown - Alerts -->
                <div
                  class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                  aria-labelledby="alertsDropdown"
                >
                  <h6 class="dropdown-header">Notification Center</h6>

                  <a
                    class="dropdown-item text-center medium text-gray-900"
                    href="#"
                    >Show All Notification</a
                  >
                </div>
              </li>

              <!-- Nav Item - Messages -->
              <li class="nav-item dropdown no-arrow mx-1">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="messagesDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i class="fas fa-shopping-cart"></i>
                  <!-- Counter - Messages -->
                  <span class="badge badge-danger badge-counter">0</span>
                </a>
                <!-- Dropdown - Messages -->
                <div
                  class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                  aria-labelledby="messagesDropdown"
                >
                  <h6 class="dropdown-header">Cart Center</h6>
                  <a
                    class="dropdown-item text-center medium text-gray-900"
                    href="#"
                    >No cart added</a
                  >
                </div>
              </li>

              <div class="topbar-divider d-none d-sm-block"></div>

              <!-- Nav Item - User Information -->
              <li class="nav-item dropdown no-arrow">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="userDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <span
                    class="mr-2 d-none d-lg-inline text-gray-800 fw-600 small"
                    > {{ Auth::user()->firstname }} 
                    {{ Auth::user()->lastname }} 
                  </span>
                  <img
                    class="img-profile rounded-circle"
                    src="{{URL::asset("image/undraw_profile.svg") }}"
                  />
                </a>
                <!-- Dropdown - User Information -->
                <div
                  class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                  aria-labelledby="userDropdown"
                >
                  <a class="dropdown-item" href="{{URL::asset("user") }}">
                    <i
                      class="fas fa-info-circle fa-sm fa-fw mr-2 text-gray-400"
                    ></i>
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
                  <a
                    class="dropdown-item"
                    href="#"
                    data-toggle="modal"
                    data-target="#logoutModal"
                  >
                    <i
                      class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"
                    ></i>
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
              <h1 class="h2 fw-700 mb-1 text-gray-900">Refer a Friend</h1>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="{{ URL::asset("dashboard") }}">Home</a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">
                    Affilates
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>

        <div class="container mb-4">
          <div class="service-wrapper" id='affilate-service'>
            <div class="service-content-left pl-4">
              <h2 class="fw-500">Affilates</h2>
              <p>
                Easily accessible customer service is crucial in today's
                24-hour, online business environment Hostim's experienced team
                Members.
              </p>
              <a
                href="#affilate-form"
                class="btn btn-primary bg-transparent px-4 py-3" id='register-earn-btn'
                >Register & Start To Earn</a
              >
            </div>
            <div class="service-content-right pr-5">
              <img src="{{ URL::asset("image/contact-us.svg")}}" alt="Services Images" />
            </div>
          </div>
        </div>
        <div class="container mt-4 mb-5">
          <div class="row" id='refer-process'>
            <div class="col-md-4 " id='sign-up-card'>
              <div class="affilate-step p-4">
                <img src="{{ URL::asset("image/handshake.png")}}" />
                <div>
                  <h4 class="my-3">Sign up</h4>
                  <p class="text-gray-900">
                    Join the group of individuals, publications, bloggers, and
                    innovators who are already making money with the Murphy's
                    Technology Affiliates Program.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4 " id='refer-card'>
              <div class="affilate-step p-4">
                <img src="{{ URL::asset("image/chat.png")}}"/>
                <div>
                  <h4 class="my-3">Recommend</h4>
                  <p class="text-gray-900">
                    Share our services with your audience. We have customised
                    linking tools for individual bloggers and social media
                    influencers.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4 " id='earn-card'>
              <div class="affilate-step p-4">
                <img src="{{ URL::asset("image/earn.png")}}"/>
                <div>
                  <h4 class="my-3">Earn</h4>
                  <p class="text-gray-900">
                    Earn up to 10% in affiliate commissions from our qualifying
                    services. Lets grow together !!!!
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="bg-white" id="affilate-form">
          <div class="container-fluid my-5 pt-3">
            <h2 class="h3 text-center fw-700 mb-5">Become An Affiliate</h2>
            <div class="row justify-content-center">
              <div class="col-9">
                <div class="contact-form">
                  <form>
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="firstName" class="fw-600">First Name</label>
                        <input
                          type="text"
                          class="form-control form-control-user"
                          id="firstName"
                          required=""
                          placeholder="Enter First Name"
                        />
                      </div>
                      <div class="col-sm-6">
                        <label for="lastName" class="fw-600">Last Name</label>
                        <input
                          type="text"
                          class="form-control form-control-user"
                          id="email"
                          placeholder="Enter Last Name"
                          required=""
                        />
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="firstName" class="fw-600">Email</label>
                        <input
                          type="email"
                          class="form-control form-control-user"
                          id="phoneNum"
                          required=""
                          placeholder="Enter Email"
                        />
                      </div>
                      <div class="col-sm-6">
                        <label for="lastName" class="fw-600"
                          >Phone Number</label
                        >
                        <input
                          type="number"
                          class="form-control form-control-user"
                          id="subject"
                          required=""
                          placeholder="Enter Phone Number"
                        />
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-12">
                        <label for="businessOption" class="fw-600"
                          >Are you a business or individual?
                        </label>
                        <select
                          name="businessOption"
                          id="surveyInfo"
                          class="form-control form-control-user"
                        >
                          <option value="Business" selected="">Business</option>
                          <option value="Individual">Individual</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-12">
                        <label for="businessOption" class="fw-600"
                          >Which products are you interested in offering?
                        </label>
                        <div class="">
                          <div class="from-group_radio" id="radio">
                            <div>
                              <input
                                type="radio"
                                id="websiteDesign"
                                name="product_option"
                                value="Website Design"
                              />
                              <label for="html"
                                >Website Design / Development</label
                              >
                            </div>
                            <div id="radio">
                              <input
                                type="radio"
                                id="websiteDevelopment"
                                name="product_option"
                                value="Website Development"
                              />
                              <label for="html"
                                >Website hosting / Domain names</label
                              >
                            </div>
                          </div>
                          <div class="from-group_radio" id="radio">
                            <div id="radio">
                              <input
                                type="radio"
                                id="webHosting"
                                name="product_option"
                                value="Web Hosting"
                              />
                              <label for="html">SEO service</label>
                            </div>
                            <div id="radio">
                              <input
                                type="radio"
                                id="other"
                                name="product_option"
                                value="other"
                              />
                              <label for="html">Other</label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-12">
                        <label for="message" class="d-block fw-600"
                          >Message</label
                        >
                        <textarea
                          name="mesage"
                          id="message"
                          class="w-100 p-3"
                          cols="30"
                          rows="5"
                          placeholder="Write Message"
                        ></textarea>
                      </div>
                    </div>
                    <div class="d-flex mt-4 justify-content-center">
                      <input
                        type="submit"
                        value="Submit"
                        class="btn-primary btn px-5 py-3"
                      />
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="faq-wrapper py-5">
          <h2 class="text-center text-white mt-2">
            Frequently Asked Questions
          </h2>
          <p class="text-center text-white mb-5">
            These are common questions we get asked.
          </p>
          <div class="faq-content container">
            <div class="row justify-content-center">
              <div class="col-8">
                <div class="accordion" id="accordionExample">
                  <div class="card">
                    <div
                      class="card-header btn btn-link btn-block text-left collapsed"
                      type="button"
                      data-toggle="collapse"
                      data-target="#faqOne"
                      aria-expanded="false"
                      aria-controls="collapseOne"
                      id="headingOne"
                    >
                      <h2 class="mb-0">
                        How does the Affiliates Program work?
                      </h2>
                    </div>

                    <div
                      id="faqOne"
                      class="collapse"
                      aria-labelledby="headingOne"
                      data-parent="#accordionExample"
                    >
                      <div class="card-body">
                        You can share our services which are available on
                        Murphys Technology with your audience through customised
                        linking tools and earn money on qualifying purchases and
                        customer actions like signing up. Give us a call on 02
                        7254 4827 to learn more or if you have any further
                        questions.
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div
                      class="card-header btn btn-link btn-block text-left collapsed"
                      type="button"
                      data-toggle="collapse"
                      data-target="#faqTwo"
                      aria-expanded="false"
                      aria-controls="collapseTwo"
                      id="headingTwo"
                    >
                      <h2 class="mb-0">How do I qualify for this program?</h2>
                    </div>
                    <div
                      id="faqTwo"
                      class="collapse"
                      aria-labelledby="headingTwo"
                      data-parent="#accordionExample"
                    >
                      <div class="card-body">
                        One of the biggest ways a seemingly trivial toilet can
                        contribute to the overall sustainable of a building is
                        by helping it save water.
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div
                      class="card-header btn btn-link btn-block text-left collapsed"
                      type="button"
                      data-toggle="collapse"
                      data-target="#faqThree"
                      aria-expanded="false"
                      aria-controls="collapseThree"
                      id="headingThree"
                    >
                      <h2 class="mb-0">How do I sign up to the program?</h2>
                    </div>
                    <div
                      id="faqThree"
                      class="collapse"
                      aria-labelledby="headingThree"
                      data-parent="#accordionExample"
                    >
                      <div class="card-body">
                        One of the biggest ways a seemingly trivial toilet can
                        contribute to the overall sustainable of a building is
                        by helping it save water.
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div
                      class="card-header btn btn-link btn-block text-left collapsed"
                      type="button"
                      data-toggle="collapse"
                      data-target="#faqFour"
                      aria-expanded="false"
                      aria-controls="collapseThree"
                      id="headingThree"
                    >
                      <h2 class="mb-0">How do I earn in this program?</h2>
                    </div>
                    <div
                      id="faqFour"
                      class="collapse"
                      aria-labelledby="headingThree"
                      data-parent="#accordionExample"
                    >
                      <div class="card-body">
                        You earn from qualifying purchases and programs through
                        the traffic you drive to Digital Growth Creative.
                        Commission income for qualifying purchases and programs
                        differ based on service category. Give us a call on 02
                        7254 4827 to learn more or if you have any further
                        questions.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="mt-5">
            <p class="text-center text-white faq-query">
              If you have other questions which weren't answered above, <br />
              or want to get the process started. Book a discovery call at
              <a href="tel:02 9055 7494">02 7254 4827</a>
            </p>
          </div>
        </div>
        <!-- Footer -->
        <footer class="sticky-footer bg-white">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright &copy; Your Website 2021</span>
            </div>
          </div>
        </footer>
      </div>
    </div>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->

    <div
      class="modal fade"
      id="logoutModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button
              class="close"
              type="button"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            Select "Logout" below if you are ready to end your current session.
          </div>
          <div class="modal-footer">
            <button
              class="btn btn-secondary"
              type="button"
              data-dismiss="modal"
            >
              Cancel
            </button>
            <a class="btn btn-primary" href="{{ URL::asset("logout") }}">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!--overlay element-->
  <div class="body-overlay">
  </div> 

  <!--external javascript file-->
  <script src="{{ URL::asset("js/main.js") }}"></script>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ URL::asset("jquery/jquery.min.js")}}"></script>
    <script src="{{ URL::asset("bootstrap/js/bootstrap.bundle.min.js")}}"></script>
  </body>
</html>
