@extends('layout1')

@section('body-content')
    
  <form action="/hms/accommodations" method="GET"> 
  <div style="background-color: #4b5658; width: 100%;height: 200px; padding-top: 15px;padding-left:30px">
  <div class="row" >
  <h3 style="color:white; padding-left: 16px">Search from thousands of products available on our storage</h3><h3></h3>
    <div class="col-md-10">
        <div class="input-group">
           <input style="width: 800px; height: 50px" type="text" class="form-control" placeholder="Search medicine" id="txtSearch\"/>
        <div class="input-group-btn">
              <button style="width: 150px; height: 50px" class="btn btn-success" type="submit">
                <span><h4>Find</h4></span>
              </button>
        </div>
      </div>
   </div>

   <!--  <div class="col-md-4" style="padding-left: 160px">
              <button style="width: 184px;height: 50px" class="btn btn-success" type="submit">
                <span><h4> Upload Prescription</h4></span>
              </button>
    </div> -->
       

    </div>
  </div>
</form>


     <h3>Please help us by giving your information</h3>

     <div class="row">
       <div class="col-md-6">  
         <form action="#" method="">
          <div class="form-group">
             <label for="order_no">Order NO.</label>
               <input class="form-control" type="text" name="order_no" id="order_no">
          </div>
          <div class="form-group">
             <label for="first_name">Name</label>
               <input class="form-control" type="text" name="first_name" id="first_name">   
          </div> 
          <div class="form-group">
             <label for="address">Adress</label>
               <input class="form-control" type="text" name="address" id="address">   
          </div> 
          <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
          <!-- <input type="hidden" name="_token" value="{{Session::token()}}"> -->  
         </form>         
       </div>
      <div class="col-md-6">
         <form action="#" method="post">
          <div class="form-group">
             <label for="delivetydate">Delivery Date</label>
               <!-- <input class="form-control" type="text" name="delivetydate" id="delivetydate"> -->
   <!-- start calender code -->
              <div class="container">
			    <div class="col-sm-6" style="height:130px;">
			        <div class="form-group">
			            <div class='input-group date' id='datetimepicker8'>
			                <input type='text' class="form-control" />
			                    <span class="input-group-addon">
			                    <span class="fa fa-calendar">
			                    </span>
			                </span>
			            </div>
			        </div>
			    </div>
    
</div>
 <!-- end calender code -->
          </div>
          <div class="form-group">
             <label for="first_name">Your First Name</label>
               <input class="form-control" type="text" name="first_name" id="first_name">   
          </div> 
          <button type="submit" class="btn btn-primary">Submit</button>  
         </form>
           
       </div>

     </div>
<h1></h1>

@endsection