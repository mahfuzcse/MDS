@extends('layout1')

@section('body-content')

 <table class="table table-hover table-inverse">

   <head >
	   <tr style="background-color: green">
	   	 <th style="color: white">#</th>
         <th style="color: white">Image</th>
         <th style="color: white">Item</th>
	     <th style="color: white">Quality</th>
	     <th style="color: white">Price</th> 
	     <th style="color: white">Discount</th>
	     <th style="color: white">Total Amount</th> 
	     <th style="color: white">Action</th>     
	   </tr>
   </head>


  <tbody>  
   @foreach ($clients as $c)
	   <tr>
	   	  <td>{{$c->id}}</td>
	      <td>{{$c->}}<img src="images/4.jpg" style="width: 80px;height: 80px;"></td> 
	      <td>{{$c->item}}</td> 
	      <td>{{$c->quality}}</td>
	      <td>{{$c->price}}</td>
	      <td>{{$c->discount}}</td>
	      <td>{{$c->total}}</td>
	      <td>
	          <a class="btn btn-xs btn-danger"  href="{{action('StudentsController@delete',$c)}}" 
					onclick="return confirm('Are you sure?')">Delete</a>

				<!-- <p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-md" data-title="Delete" data-toggle="modal" data-target="#delete"><span class="glyphicon-trashcon glyphicon-trash"></span></button></p> -->
		  </td>      
	   </tr>
	   @endforeach



  </tbody>
</table>

<div class="row" >
			<div class="col-md-4" style="margin-left: 385px;">			
			<h6>TOTAL DISCOUNT :<span class="label label-primary">300tk</span></h6>
			</div>

			<div class="col-md-3">			
			<h6 >Amount :<span class="label label-primary">1300tk</span></h6>
			</div>
</div>

<form>
		<div class="container" style="width: 33%;margin-left: -20px; border-top-style: solid; margin-top: 20px;">
		  <div class="panel panel">
		    <div class="panel-body" style="background-color: #66e0ff">Total Amount</div>
		    <div class="panel-body" style="background-color: #66b3ff">Cart Discount</div>
		    <div class="panel-body" style="background-color: #66e0ff">Shipping charge</div>
		    <div class="panel-body" style="background-color:#007a99;color: white;">You Pay</div>
		  </div>
		 </div>
</form>
	<div>	
         <a class="btn btn-primary" role="button" href="{{url('orderaddress')}}"><h5 style="color: white;width: 53%;">Continue shopping</h5></a>
	</div>

<h1></h1>
@endsection