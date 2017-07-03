<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/foundation.css')}}" />
  <link rel="stylesheet" href="{{asset('css/custom.css')}}" />
  <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{asset('css/business-frontpage.css')}}">
  <link rel="stylesheet" href="{{asset('css/shop-homepage.css')}}">


  <script src="{{asset('js/jquery.min.js')}}"></script>
  <script src="{{asset('js/vendor/modernizr.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/vendor/modernizr.js')}}"></script>

</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                      
      </button>

      
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
       <a class="navbar-brand" href="#">MDS</a>
      
      <ul class="nav navbar-nav">
        <li><a href="{{url('home')}}"><i class="fa fa-home" style="width: 60px;">Home</i></a></li>
        <li><a href="{{url('order')}}">Order</a></li>      
        <li><a href="{{url('contact')}}">Contact</a></li>
        <li><a href="{{url('about')}}">About us</a></li>
        <li><a href="{{url('about')}}">How To Order</a></li>
      </ul>

 <ul class="nav navbar-nav navbar-right">
    
    <li><a href="{{url('ordersummary')}}"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
     <li><a href="{{url('fullstorage')}}">Storage</a></li>
     <li><a href="{{url('login')}}">Log In</a></li>
     <li><a href="{{url('registration')}}"><span class="glyphicon glyphicon-user"></span>Registration</a></li>
 </ul>

    </div>
  </div>
</nav>


<div class="container">
      @yield('body-content')
</div>

<!-- <footer class="container-fluid text-center">

  
</footer> -->
</body>
</html>
