<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!--font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    
    <link  href="{{URL::asset("css/style.css")}}" rel="stylesheet">


   
</head>
<body>
    <div class="main-section">
        <div class="dashboard-header">
            <div class="text-info">
              <p>Welcome, <span id='admin'>Admin</span></p>
              <p>Admin Panel</p>
            </div>
            <a href="" id='logout-btn'>Logout <i class="fa-solid fa-right-from-bracket"></i></a>
        </div>
        <div class="brief-info">
            <div class="item-card">
             <span id="card-detail">
             <i class="fa-solid fa-users"></i>
                <p>Users</p>
             </span>
                <a href="{{ route('admin.users.list') }}"><i class="fa-solid fa-eye"></i> View</a>
            </div>
            <div class="item-card">
                <span id="card-detail">
                <i class="fa-solid fa-bag-shopping"></i>
                <p>Products</p>
                </span>
                <a href="{{route('admin.products.list')}}"><i class="fa-solid fa-eye"></i> View</a>
            </div>
            <div class="item-card">
                <span id="card-detail">
                <i class="fa-solid fa-globe"></i>
                <p>Web products</p>
                </span>
                <a href="{{ route('admin.webproducts.list') }}"><i class="fa-solid fa-eye"></i> View</a>
            </div>
            <div class="item-card">
                <span id="card-detail">
                <i class="fa-solid fa-coins"></i>
                <p>Purchase</p>
                </span>
                <a href="{{ route('admin.purchases.list')}}"><i class="fa-solid fa-eye"></i> View</a>
            </div>
        </div>
    </div>
  

   <script src="{{URL::asset("css/style.css")}}"></script>
   <script src="{{ URL::asset("public/app.js") }}"></script>
  <script src="{{ URL::asset("jquery/jquery.min.js")}}"></script>
  <script src="{{ URL::asset("bootstrap/js/bootstrap.bundle.min.js")}}"></script>
  <script>
</body>
</html>
