@extends('layout1')

@section('body-content')

 <div class="col-md-12">
 <table class="table table-hover table-inverse">
                     <thead>
                             <th>#</th>
                             <th>Image</th>
		                     <th>Item</th>
		                     <th>Quality</th>
		                     <th>Price</th>
		                     <th>Discount</th>
		                     <th>Total Amount</th>
                             <th>Action</th>
                     </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
	      <td>img1</td>
	      <td>A</td>
	      <td>4</td>
	      <td>400.00</td>
	      <td>25%</td>
	      <td>2014</td>
	      <td>
	        <p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-md" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p>
    
              <!-- <ul class="button-group round">
               <li><a href="#" class="button tiny" data-reveal-id="myModal">Edit</a></li>
             	<li><a href="#" class="button tiny alert ">Delete</a></li>       	
              </ul> -->
           </td>
    </tr>
    <tr>
      <th scope="row">2</th>
	      <td>img2</td>
	      <td>B</td>
	      <td>2</td>
	      <td>200.00</td>
	      <td>15%</td>
	      <td>1014</td>
	      <td>
              <p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-md" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p>
           </td>
    </tr>
    <tr>
      <th scope="row">3</th>
          <td>img3</td>
	      <td>C</td>
	      <td>6</td>
	      <td>500.00</td>
	      <td>20%</td>
	      <td>1114</td>
	      <td>
              <p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-md" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p>
           </td>
    </tr>
    <tr>
      <th scope="row">4</th>
          <td>img4</td>
	      <td>D</td>
	      <td>10</td>
	      <td>340.00</td>
	      <td>10%</td>
	      <td>1800</td>
	      <td>
              <p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-md" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p>
           </td>
    </tr>




  </tbody>
</table>
<button type="submit" class="btn btn-info"><a href="{{url('orderaddress')}}">Continue shopping</a></button>
</div><h1></h1>
@endsection