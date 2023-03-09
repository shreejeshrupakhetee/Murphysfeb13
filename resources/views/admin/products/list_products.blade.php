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
                <a href="{{ route('adminhome') }}" id='back-to-dashboard'><i class="fa-solid fa-arrow-left"></i> Back to dashboard</a>
              <p id='page-info'>Admin Panel / <span>Products List</span></p>
            </div>
            <a href="" id='logout-btn'>Logout <i class="fa-solid fa-right-from-bracket"></i></a>
        </div>
        <div class="table-section">
            <table id='users-table' class='product-table'>
            <thead>
                    <tr>
                        <th scope='col'>ID</th>
                        <th scope='col'>Name</th>
                        <th scope='col'>Description</th>
                        <th scope='col'>Price</th>
                        <th scope='col'>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }} </td>
                            <td>{{ $product->description1 }}</td>
                            <td>{{ $product->price }}</td>
                            <td><a href="" id='edit-user'> <i class="fa-solid fa-pen"></i> Edit</a>
                            <a href="" id='delete-user'><i class="fa-solid fa-trash"></i>Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            </table>
        </div>
        <div class="pagination">
            <a href="" id="previous-btn"><i class="fa-solid fa-chevron-left"></i>Previous</a>
            <span>1 of 5</span>
             <a href="" id="next-btn">Next<i class="fa-solid fa-chevron-right"></i></a>  
        </div>
    </div>
  

   <script src="{{URL::asset("css/style.css")}}"></script>
   <script src="{{ URL::asset("public/app.js") }}"></script>
  <script src="{{ URL::asset("jquery/jquery.min.js")}}"></script>
  <script src="{{ URL::asset("bootstrap/js/bootstrap.bundle.min.js")}}"></script>
  <script>
</body>
</html>