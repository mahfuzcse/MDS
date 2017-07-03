@extends('layout1')

@section('body-content')
 <div class="container">

        <div class="row">

            <div class="col-md-3">
                <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Category</button>

   <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Category1</a>
    <a class="dropdown-item" href="#">Category2</a>
    <a class="dropdown-item" href="#">Category3</a>
    <a class="dropdown-item" href="#">Category4</a>
    <a class="dropdown-item" href="#">Category5</a>
    <a class="dropdown-item" href="#">Category6</a>
  </div>

</div>
            </div>
 <div class="col-md-9">
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
                                    <img class="slide-image" src="images/m11.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="images/m12.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="images/m13.jpg" alt="">
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
 <div class="row">

                    <div class="col-sm-5 col-lg-5 col-md-5">
                        <div class="thumbnail">
                            <img src="img/eybil160.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$24.99</h4>
                                <h4><a href="#">First Product</a>
                                </h4>
                                <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            <div>
                                 <a href="#" class="btn btn-primary pull-left" role="button" >Buy Now</a>
                                 <a href="#" class="btn btn-success pull-right" role="button">Add to cart</a>
                            </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-sm-5 col-lg-5 col-md-5">
                        <div class="thumbnail">
                            <img src="img/eybil160.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$64.99</h4>
                                <h4><a href="#">Second Product</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">12 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                                <div>
                                 <a href="#" class="btn btn-primary pull-left" role="button" >Buy Now</a>
                                 <a href="#" class="btn btn-success pull-right" role="button">Add to cart</a>
                            </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-5 col-lg-5 col-md-5">
                        <div class="thumbnail">
                            <img src="img/eybil160.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$74.99</h4>
                                <h4><a href="#">Third Product</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">31 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                                <div>
                                 <a href="#" class="btn btn-primary pull-left" role="button" >Buy Now</a>
                                 <a href="#" class="btn btn-success pull-right" role="button">Add to cart</a>
                            </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-5 col-lg-5 col-md-5">
                        <div class="thumbnail">
                            <img src="img/eybil160.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$84.99</h4>
                                <h4><a href="#">Fourth Product</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">6 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                                <div>
                                 <a href="#" class="btn btn-primary pull-left" role="button" >Buy Now</a>
                                 <a href="#" class="btn btn-success pull-right" role="button">Add to cart</a>
                            </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-5 col-lg-5 col-md-5">
                        <div class="thumbnail">
                            <img src="img/eybil160.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$94.99</h4>
                                <h4><a href="#">Fifth Product</a>
                                </h4>
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
                                <div>
                                 <a href="#" class="btn btn-primary pull-left" role="button" >Buy Now</a>
                                 <a href="#" class="btn btn-success pull-right" role="button">Add to cart</a>
                            </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->

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
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

<!-- <div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="img/eybil160.jpg" class="img-responsive" style="max-height: 160px;" alt="...">
      <div class="caption">
        <h3>Thumbnail label</h3>
        <p><strong>Indication: </strong>It is truly difficult to memorize the GRE word. There are so many words.<br><strong>Dosage & Administration: </strong> Only in some way I want to memorize these words<br><strong>Preparation: </strong> for my GRE exam and IBA MBA exam at Dhaka University.</p>
        <span>Tk. 120.00 </span>
        <div>
	        <a href="#" class="btn btn-primary pull-left" role="button" >Buy Now</a>

	        <a href="#" class="btn btn-success pull-right" role="button">Add to cart</a>
	    </div>
      </div>
    </div>
  </div>

  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="img/eybil160.jpg" class="img-responsive" style="max-height: 160px;" alt="...">
      <div class="caption">
        <h3>Thumbnail label</h3>
        <p><strong>Indication: </strong>It is truly difficult to memorize the GRE word. There are so many words.<br><strong>Dosage & Administration: </strong> Only in some way I want to memorize these words<br><strong>Preparation: </strong> for my GRE exam and IBA MBA exam at Dhaka University.</p>
        <span>Tk. 120.00 </span>
        <div>
	        <a href="#" class="btn btn-primary pull-left" role="button" >Buy Now</a>

	        <a href="#" class="btn btn-success pull-right" role="button">Add to cart</a>
	    </div>
      </div>
    </div>
  </div>

  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="img/eybil160.jpg" class="img-responsive" style="max-height: 160px;" alt="...">
      <div class="caption">
        <h3>Thumbnail label</h3>
        <p><strong>Indication: </strong>Retinopathy (hypertensive and diabetic), Night blindness, Macular degeneration, Cataracts, Retinitis pigmentosa, Hemorrhagic retinopathy.
.<br><strong>Dosage & Administration: </strong> 1 capsule 3 times daily or as advised by the physician <br><strong>Preparation: </strong>160mg capsule. 3 x 10`s capsule in Alu-PVC blister Pack. </p>
        <span>Tk. 120.00 </span>
        <div>
	        <a href="#" class="btn btn-primary pull-left" role="button" >Buy Now</a>

	        <a href="#" class="btn btn-success pull-right" role="button">Add to cart</a>
	    </div>
      </div>
    </div>
  </div>
</div>


<div class="row" style="margin-top: 25px;">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="img/eybil160.jpg" class="img-responsive" style="max-height: 160px;" alt="...">
      <div class="caption">
        <h3>Thumbnail label</h3>
        <p><strong>Indication: </strong>It is truly difficult to memorize the GRE word. There are so many words.<br><strong>Dosage & Administration: </strong> Only in some way I want to memorize these words<br><strong>Preparation: </strong> for my GRE exam and IBA MBA exam at Dhaka University.</p>
        <span>Tk. 120.00 </span>
        <div>
	        <a href="#" class="btn btn-primary pull-left" role="button" >Buy Now</a>

	        <a href="#" class="btn btn-success pull-right" role="button">Add to cart</a>
	    </div>
      </div>
    </div>
  </div>

  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="img/eybil160.jpg" class="img-responsive" style="max-height: 160px;" alt="...">
      <div class="caption">
        <h3>Thumbnail label</h3>
        <p><strong>Indication: </strong>It is truly difficult to memorize the GRE word. There are so many words.<br><strong>Dosage & Administration: </strong> Only in some way I want to memorize these words<br><strong>Preparation: </strong> for my GRE exam and IBA MBA exam at Dhaka University.</p>
        <span>Tk. 120.00 </span>
        <div>
	        <a href="#" class="btn btn-primary pull-left" role="button" >Buy Now</a>

	        <a href="#" class="btn btn-success pull-right" role="button">Add to cart</a>
	    </div>
      </div>
    </div>
  </div>

  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="img/eybil160.jpg" class="img-responsive" style="max-height: 160px;" alt="...">
      <div class="caption">
        <h3>Thumbnail label</h3>
        <p><strong>Indication: </strong>It is truly difficult to memorize the GRE word. There are so many words.<br><strong>Dosage & Administration: </strong> Only in some way I want to memorize these words<br><strong>Preparation: </strong> for my GRE exam and IBA MBA exam at Dhaka University.</p>
        <span>Tk. 120.00 </span>
        <div>
	        <a href="#" class="btn btn-primary pull-left" role="button" >Buy Now</a>

	        <a href="#" class="btn btn-success pull-right" role="button">Add to cart</a>
	    </div>
      </div>
    </div>
  </div>
</div>

<div class="row" style="margin-top: 25px;">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="img/eybil160.jpg" class="img-responsive" style="max-height: 160px;" alt="...">
      <div class="caption">
        <h3>Thumbnail label</h3>
        <p><strong>Indication: </strong>It is truly difficult to memorize the GRE word. There are so many words.<br><strong>Dosage & Administration: </strong> Only in some way I want to memorize these words<br><strong>Preparation: </strong> for my GRE exam and IBA MBA exam at Dhaka University.</p>
        <span>Tk. 120.00 </span>
        <div>
	        <a href="#" class="btn btn-primary pull-left" role="button" >Buy Now</a>

	        <a href="#" class="btn btn-success pull-right" role="button">Add to cart</a>
	    </div>
      </div>
    </div>
  </div>

  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="img/eybil160.jpg" class="img-responsive" style="max-height: 160px;" alt="...">
      <div class="caption">
        <h3>Thumbnail label</h3>
        <p><strong>Indication: </strong>It is truly difficult to memorize the GRE word. There are so many words.<br><strong>Dosage & Administration: </strong> Only in some way I want to memorize these words<br><strong>Preparation: </strong> for my GRE exam and IBA MBA exam at Dhaka University.</p>
        <span>Tk. 120.00 </span>
        <div>
	        <a href="#" class="btn btn-primary pull-left" role="button" >Buy Now</a>

	        <a href="#" class="btn btn-success pull-right" role="button">Add to cart</a>
	    </div>
      </div>
    </div>
  </div>

  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="img/eybil160.jpg" class="img-responsive" style="max-height: 160px;" alt="...">
      <div class="caption">
        <h3>Thumbnail label</h3>
        <p><strong>Indication: </strong>It is truly difficult to memorize the GRE word. There are so many words.<br><strong>Dosage & Administration: </strong> Only in some way I want to memorize these words<br><strong>Preparation: </strong> for my GRE exam and IBA MBA exam at Dhaka University.</p>
        <span>Tk. 120.00 </span>
        <div>
	        <a href="#" class="btn btn-primary pull-left" role="button" >Buy Now</a>

	        <a href="#" class="btn btn-success pull-right" role="button">Add to cart</a>
	    </div>
      </div>
    </div>
  </div>
</div> -->

@endsection