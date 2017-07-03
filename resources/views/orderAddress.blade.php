@extends('layout1')

@section('body-content')
  <h2 style="padding-left: 80px">Delivery Address</h2>
  <form action="#" method="">
         
         <div class="row">  <!--first row -->
             <div class="col-md-5">  
		           <div class="form-group">
		               <label for="order_no">Order NO.</label>
		               <input class="form-control" type="text" name="order_no" id="order_no">
		           </div>
		     </div>
		     <div class="col-md-5">  
		           <div class="form-group">
		               <label for="order_no">Delivery Date</label>
		               <input class="form-control" type="datetime-local" name="order_no" id="order_no">
		           </div>
		     </div>
		  </div>    

		  <div class="row">     
		        <div class="col-md-5">
		           <div class="form-group">
		               <label for="fname">First Name</label>
		               <input class="form-control" type="text" name="fname" id="fname">   
		           </div>
		        </div>   
                <div class="col-md-5">  
		           <div class="form-group">
		             <label for="lname">Last Name</label>
		               <input class="form-control" type="text" name="lname" id="lname">   
		           </div> 
		        </div>
            </div>
            <div class="row">     
		        <div class="col-md-10">         
                  <div class="form-group">
	                  <label for="name"> Address</label>
	                  <textarea name="message" id="message" class="form-control" rows="2" cols="10" required="required" placeholder="location..."></textarea>
                  </div>  
                </div>
            </div>
           <div class="col-sm-3" style="margin-left: 625px;">
           <a class="btn btn-success btn-sm" role="button" href="{{url('orderpayment')}}"><h5 style="color: white;">Continue shopping</h5></a>
		   </div>         

         </form>    
                
<h1></h1>

@endsection