<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

 <style>
    /* Remove the navbar's default rounded borders and increase the 
bottom margin */ 

    body {
             font-family: "Lato", sans-serif;
         }
    
    .navbar {
              margin-bottom: 50px;
              border-radius: 0;
            }
    
    /* Remove the jumbotron's default bottom margin */ 
    .jumbotron{
                    margin-bottom: 0;
                    background-color: #4CAF50;
              }
    .form-inline{
                    float: right;
                    padding-right: 20px;
                 }
    
    select {
              width: 100%;
              padding: 16px 20px;
              border: none;
              border-radius: 4px;
              background-color: #f1f1f1;
              }

    .form-inline2{
                    float: left;
                 }
    

    div.form-group{  
                    padding: 0px;
                  }

    div.form-group2{
                    padding: 30px;
                   }
    
    footer {
              background-color: #4CAF50;
              padding: 104px;
              width: 100%;
           }
  </style>

</head>
<body>

<div class="jumbotron">
        <div class="container text-center">
          <h1>Medicine delivery service</h1>      
          <p>Mission, Vission & Values</p>
        </div>
  
        <form class="form-inline">
          <input type=" " class="form-control" size="30" placeholder="serching...">
          <button type="button" class="btn btn-danger">Search</button>
        </form>
</div>

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
        <li><a href="{{url('home')}}">Home</a></li>
        <li><a href="{{url('order')}}">Order</a></li>
        <li><a href="{{url('login')}}">Log In</a></li>
        <li><a href="{{url('contact')}}">Contact</a></li>
        <li><a href="{{url('about')}}">About us</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
              <li><a href="{{url('registration')}}"><span class="glyphicon glyphicon-user"></span> Registration</a></li>
              
              <li><a href="{{url('new')}}"><span class="glyphicon glyphicon-shopping-cart"></span> News</a></li>
      </ul>

    </div>
  </div>
</nav>


<div class="container">
      @yield('body-content')
</div>

<footer class="container-fluid text-center">

  
</footer>
</body>
</html>
