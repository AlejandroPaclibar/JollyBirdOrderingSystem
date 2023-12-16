<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>base</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <style>
        body {
            margin: 5%;
        }


    </style>
</head>
<body>
    <nav class="navbar navbar-light" style="background-color: #28283a;">
        <div class="img">
                <img src="{{asset('download.png')}}" alt="">
               <h1>Jollybird</h1> 
        </div>
    


        <ul class="nav justify-content-end float-right nav-pills">
                <li class="nav-item">
                    <a class="nav-link text-light  {{Route::is('home') ? 'active' : ''}}" href="{{url('/')}}">  Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light {{Route::is('customers') ? 'active' : ''}}" href="{{url('/customers')}}">Customers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  text-light {{Route::is('orders') ? 'active' : ''}}" href="{{url('/orders')}}">Orders</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-light  {{Route::is('products') ? 'active' : ''}}" href="{{url('/products')}}">Products</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-light {{Route::is('ordered_items') ? 'active' : ''}}" href="{{url('/ordered_items')}}">Order_items</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light {{Route::is('payment_transactions') ? 'active' : ''}}" href="{{url('/payment_transactions')}}">Payment_Transactions</a>
                </li>
            </ul>
    </nav>

    <div class="container mt-5" >
        @yield('content')
    </div>
</body>
</html>

<style>
    h1 {
      margin-left: 30px;
      color: white;
      font-family: 'Quicksand', sans-serif;
      letter-spacing: 13px;
    }

    li{
        margin-right: 20px;
    }

    .nav-item {
        font-weight: 400;
        font-size: 16px
    }
    .img {
        display: flex;
        height: 60px;
        align-items: center
    }
    img {
        width: 70px;
        height: 60px;
        margin-left: 10px;

    }

</style>