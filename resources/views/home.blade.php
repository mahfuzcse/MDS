@extends('layout1')

@section('body-content')
    <!-- Page Content -->
    <div class="container-fluid">

        <div class="row">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="images/slide01.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="images/slide02.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="images/slide03.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="images/slide04.jpg" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>
                </div>
  <hr>

            <div class="row">   
            <div class="col-md-3">
                <p class="lead">Categories</p>
                <hr>
                <div class="list-group">
                    <a href="{{url('menHealthPill')}}" class="list-group-item">Men Health Pills</a>
                    <a href="#" class="list-group-item">Women Health Products</a>
                    <a href="#" class="list-group-item">AntiCoagulants</a>
                    <a href="#" class="list-group-item">Anti Depressant</a>
                    <a href="#" class="list-group-item">Asthma</a>
                    <a href="#" class="list-group-item">Anti Emetic</a>
                    <a href="#" class="list-group-item">Quit Smoking</a>
                    <a href="#" class="list-group-item">Hair Loss</a>
                    <a href="#" class="list-group-item">AntiCancer</a>
                    <a href="#" class="list-group-item">Digestive System</a>
                    <a href="#" class="list-group-item">Epilepsy </a>
                    <a href="#" class="list-group-item">Anthelmintic or Anti Worm</a>
                    <a href="#" class="list-group-item">Herpes and HIV PIlls</a>
                    <a href="#" class="list-group-item">Alzheimers</a>
                    <a href="#" class="list-group-item">Anti Alcohol Pills</a>
                    <a href="#" class="list-group-item">Eye Care</a>
                    <a href="#" class="list-group-item">Vitamins And Harmones</a>
                    <a href="#" class="list-group-item">Bladder Prostate</a>
                    <a href="#" class="list-group-item">Heart and Blood Pressure</a>
                    <a href="#" class="list-group-item">Diabetes</a>
                    <a href="#" class="list-group-item">Immunosuppressive</a>
                    <a href="#" class="list-group-item">Category 23</a>
                </div>
            </div>
<!--      </div>    -->
<h3><strong>Featured Products</strong></h3>

@foreach($medicines->chunk(4) as $medicineChunk)
<!-- <div class="row"> -->

@foreach($medicineChunk as $medicine)
<div class="col-md-3">
    <div class="thumbnail">
        <img src="img/eybil160.jpg{{$medicine->img}}" alt="" class="img-responsive">
            <div class="caption">            
                 <h4>{{ $medicine->medicine_name }}</h4>
                 <p class="description">{{ $medicine->medicine_descr }}</p>
                     <!-- <p align="center">Manufactured By:Squar.</p> -->
            </div>
            
              <div class="clearfix">
                  <h5 class="pull-left">{{ $medicine->price }}</h5>
                  <a href="{{url('medicineDetail')}}" class="btn btn-primary pull-right" role="button">View Details</a>
                    <!-- <a href="#" class="btn btn-primary pull-left" role="button" >Buy Now</a>
                    <a href="#" class="btn btn-success pull-right" role="button">Add to cart</a> -->
              </div>
      
   </div>
  </div>
@endforeach
</div>
@endforeach


        <hr>


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>


@endsection