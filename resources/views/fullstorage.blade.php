@extends('layout1')

@section('body-content')
 
        <div class="row">
            <div class="col-md-2">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Category</button>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a href="#" class="list-group-item">Category1</a>
                            <a href="#" class="list-group-item">Category2</a>
                            <a href="#" class="list-group-item">Category3</a>
                            <a href="#" class="list-group-item">Category4</a>
                            <a href="#" class="list-group-item">Category5</a>
                            <a href="#" class="list-group-item" >Category6</a>
                            <a href="#" class="list-group-item">Category 7</a>
                            <a href="#" class="list-group-item">Category 8</a>
                            <a href="#" class="list-group-item">Category 9</a>
                            <a href="#" class="list-group-item">Category 10</a>
                            <a href="#" class="list-group-item">Category 11</a>
                            <a href="#" class="list-group-item">Category 12</a>
                            <a href="#" class="list-group-item">Category 13</a>
                            <a href="#" class="list-group-item">Category 14</a>
                            <a href="#" class="list-group-item">Category 15</a>
                            <a href="#" class="list-group-item">Category 16</a>
                            <a href="#" class="list-group-item">Category 17</a>
                            <a href="#" class="list-group-item">Category 18</a>
                            <a href="#" class="list-group-item">Category 19</a>
                            <a href="#" class="list-group-item">Category 20</a>
                            <a href="#" class="list-group-item">Category 21</a>
                            <a href="#" class="list-group-item">Category 23</a>
                        </div>

                </div>
            </div>
          </div>

<div class="container-fluid">
<div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <img src="img/eybil160.jpg" alt="" class="img-responsive">
            <div class="caption">
                 <h4 class="pull-right">$94.99</h4>
                 <h4><a href="#">Fifth Product</a></h4>
                     <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="ratings">
                <p class="pull-right">18 reviews</p>
                <p>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </p>
              <div class="clearfix">
                    <!-- <a href="#" class="btn btn-primary pull-left" role="button" >Buy Now</a>
                    <a href="#" class="btn btn-success pull-right" role="button">Add to cart</a> -->
                 <a href="{{url('medicineDetail')}}" class="btn btn-primary pull-right" role="button">View Details</a>
              </div>
            </div>

   </div>
  </div>

  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <img src="img/eybil160.jpg" alt="">
            <div class="caption">
                 <h4 class="pull-right">$94.99</h4>
                 <h4><a href="#">Fifth Product</a></h4>
                     <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="ratings">
                <p class="pull-right">18 reviews</p>
                <p>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </p>
              <div class="clearfix">
                 <a href="{{url('medicineDetail')}}" class="btn btn-primary pull-right" role="button">View Details</a>
              </div>
            </div>

   </div>
  </div>

  <div class="col-sm-6 col-md-4">
<div class="thumbnail">
        <img src="img/eybil160.jpg" alt="">
            <div class="caption">
                 <h4 class="pull-right">$94.99</h4>
                 <h4><a href="#">Fifth Product</a></h4>
                     <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="ratings">
                <p class="pull-right">18 reviews</p>
                <p>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </p>
              <div class="clearfix">
                    <a href="{{url('medicineDetail')}}" class="btn btn-primary pull-right" role="button">View Details</a>
              </div>
            </div>

   </div>
  </div>
</div>


<div class="row" style="margin-top: 25px;">
  <div class="col-sm-6 col-md-4">
<div class="thumbnail">
        <img src="img/eybil160.jpg" alt="">
            <div class="caption">
                 <h4 class="pull-right">$94.99</h4>
                 <h4><a href="#">Fifth Product</a></h4>
                     <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="ratings">
                <p class="pull-right">18 reviews</p>
                <p>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </p>
              <div class="clearfix">
                    <a href="{{url('medicineDetail')}}" class="btn btn-primary pull-right" role="button">View Details</a>
              </div>
            </div>

   </div>
  </div>

  <div class="col-sm-6 col-md-4">
<div class="thumbnail">
        <img src="img/eybil160.jpg" alt="">
            <div class="caption">
                 <h4 class="pull-right">$94.99</h4>
                 <h4><a href="#">Fifth Product</a></h4>
                     <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="ratings">
                <p class="pull-right">18 reviews</p>
                <p>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </p>
              <div class="clearfix">
                    <a href="{{url('medicineDetail')}}" class="btn btn-primary pull-right" role="button">View Details</a>
              </div>
            </div>

   </div>
  </div>

  <div class="col-sm-6 col-md-4">
<div class="thumbnail">
        <img src="img/eybil160.jpg" alt="">
            <div class="caption">
                 <h4 class="pull-right">$94.99</h4>
                 <h4><a href="#">Fifth Product</a></h4>
                     <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="ratings">
                <p class="pull-right">18 reviews</p>
                <p>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </p>
              <div class="clearfix">
                    <a href="{{url('medicineDetail')}}" class="btn btn-primary pull-right" role="button">View Details</a>
              </div>
            </div>

   </div>
  </div>
</div>

<div class="row" style="margin-top: 25px;">
  <div class="col-sm-6 col-md-4">
<div class="thumbnail">
        <img src="img/eybil160.jpg" alt="">
            <div class="caption">
                 <h4 class="pull-right">$94.99</h4>
                 <h4><a href="#">Fifth Product</a></h4>
                     <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="ratings">
                <p class="pull-right">18 reviews</p>
                <p>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </p>
              <div class="clearfix">
                    <a href="{{url('medicineDetail')}}" class="btn btn-primary pull-right" role="button">View Details</a>
              </div>
            </div>

   </div>
  </div>

  <div class="col-sm-6 col-md-4">
<div class="thumbnail">
        <img src="img/eybil160.jpg" alt="">
            <div class="caption">
                 <h4 class="pull-right">$94.99</h4>
                 <h4><a href="#">Fifth Product</a></h4>
                     <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="ratings">
                <p class="pull-right">18 reviews</p>
                <p>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </p>
              <div class="clearfix">
                    <a href="{{url('medicineDetail')}}" class="btn btn-primary pull-right" role="button">View Details</a>
              </div>
            </div>

   </div>
  </div>

      <div class="col-sm-6 col-md-4">
         <div class="thumbnail">
            <img src="img/eybil160.jpg" alt="">
                <div class="caption">
                     <h4 class="pull-right">$94.99</h4>
                     <h4><a href="#">Fifth Product</a></h4>
                         <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="ratings">
                    <p class="pull-right">18 reviews</p>
                    <p>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                    </p>
                  <div class="clearfix">
                        <a href="{{url('medicineDetail')}}" class="btn btn-primary pull-right" role="button">View Details</a>
                  </div>
                </div>

          </div>
      </div>
</div>
</div>



<div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>

        <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
@endsection