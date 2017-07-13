<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/foundation.css')}}"/>
  <link rel="stylesheet" href="{{asset('css/custom.css')}}"/>
  <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{asset('css/business-frontpage.css')}}">
  <link rel="stylesheet" href="{{asset('css/shop-homepage.css')}}">
  <link rel="stylesheet" href="{{asset('css/incrBtn.css')}}">
  <link rel="stylesheet" href="{{asset('css/secondNav.css')}}">
  <link rel="stylesheet" href="{{asset('css/socialIcon.css')}}">

 

  <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
  <script src="{{asset('js/vendor/modernizr.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/vendor/modernizr.js')}}"></script>
  <script src="{{asset('js/increBtn.js')}}"></script>


</head>
<body>
<!-- 1at nav-bar -->
 <nav class="navbar-static-top" style="background-color: #009999;padding-top: 10px;">
  <div class="container-fluid">

    <ul class="nav navbar-nav navbar-right">
     <div>
      <p><span class="glyphicon glyphicon-earphone" > +8801738213397 </span> | <span class="glyphicon glyphicon-envelope"> mahfuz@gmail.com </span> | <a href="{{url('about')}}" title="About us"><span>About us</span></a> | <a href="{{url('contact')}}" title="Contact"><span>Contact</span></a></p>
      </div>
    </ul>
  </div>
</nav> 


<section>
  <div class="container" role="main">
    <div class="page-header">

     <div class="col-sm-5 " style="top: -35px;">
       <p><i class="fa fa-heartbeat" style="font-size:100px;color:red;"></i></p>  
     </div>
     
     <div class="form-inline pull-right">
         <div class="form-group form-group-lg has-feedback">

                 <input name="medicine" type="text" id="search"  class="form-control" placeholder="Enter the medicineTitle" value="{{old('medicine')}}">
 
                <div id="txtHint"></div>
                 <span class="glyphicons glyphicons-xl glyphicons-group form-control-feedback"></span>
         </div>

            <button type="submit" class="btn btn-lg btn-success" style="top: -8px;">
                  <span class="glyphicons glyphicons-search" aria-hidden="true"></span>Search
            </button>
            
     </div>
      

     <div class="col-sm-3">
              <div class="btn btn-block btn-success" style="background-color: #00cc66;color:#fff; width: 200px; height: 46px;">
           <a href="{{url('ordersummary')}}">
           <img src="images/cart_icon.jpg" alt="" title="" class="vam mr10" style="width: 30px;">0</a> item, in your cart
        </div>
   </div> 

  </div> <!-- page header end -->

  </div> <!-- container end -->
</section>



<!-- 2nd nav-bar -->
<nav class="navbar navbar-inverse navbar-static-top" id="secondNav">
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
        <li><a href="{{url('home')}}">Home</a></li>
        <li><a href="{{url('order')}}">Order</a></li>                
        <li><a href="{{url('orderProcedure')}}">How To Order</a></li>
      </ul>

 <ul class="nav navbar-nav navbar-right">
    
    <!-- <li><a href="{{url('ordersummary')}}"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li> -->
     <li><a href="{{url('fullstorage')}}">Pharmacy</a></li>
     <li><a href="{{url('login')}}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
     <li><a href="{{url('registration')}}"><span class="glyphicon glyphicon-user"></span>Registration</a></li>
     <!-- new added -->
      
     <li class="dropdown">
           <a href = "#" class="dropdown-toggle glyphicon glyphicon-user " data-toggle="dropdown">
             User Management<span class="caret"></span>
           </a>
          <ul class="dropdown-menu">
             <li><a href="#">Action</a></li>
             <li><a href="#">Another</a></li>
             <li><a href="#">Somethi</a></li>
          </ul>
       </li>
      <!-- new added end -->
 </ul>

    </div>
  </div>
</nav>


<div class="container">
      @yield('body-content')
</div>

<footer class="container-fluid text-center">
<div class="pull-left">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
</div>
<div class="pull-right">
      <a href="#" class="fa fa-facebook"></a>
      <a href="#" class="fa fa-twitter"></a>
      <a href="#" class="fa fa-google"></a>
      <a href="#" class="fa fa-linkedin"></a>
      <a href="#" class="fa fa-skype"></a>
      </div>  
</footer>

<script type="text/javascript">
  
  $(document).ready(function(){
   $("#search").keyup(function(){
       var str=  $("#search").val();
       if(str == "") {
               $( "#txtHint" ).html("<b></b>"); 
       }else {
               $.get( "{{ url('demos/livesearch?id=') }}"+str, function( data ) {
                
                   $( "#txtHint" ).html( data );  
            });
       }
   });  
}); 
</script>

<script type="text/javascript">
  $(document).ready(function() {
    $(".dropdown-toggle").dropdown();
});
</script>
</body>
</html>
