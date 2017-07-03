@extends('layout1')

@section('body-content')

<h3 style="color:black; padding-left: 90px;padding-top :42px">Search from thousands of products available on our storage</h3>

  <form action="Search" method="GET" accept-charset="UTF-8" style="margin-bottom: 200px;">            

      <div class="input-group" style="margin-left: 90px;">
          <input type="text" class="form-control" placeholder="Search medicine" id="txtSearch\"  style="width: 800px; height: 50px"/>

          <button style="width: 150px; height: 50px;padding-left:-515px;" class="btn btn-success" type="submit"><span><h4>Search</h4></span>
          </button>

          {!!$errors->first('name','<span class="help-block">:message</span>')!!}
      </div>
                
  </form>

<form action="/my-submitting-page" method="post" style="background: #00b6c2;">
 
 <div class="row">  <!--first row -->
             <div class="col-sm-2">  
                 <label style="margin-top: 25px;">
                    <img src="images/m1.jpg">
                </label>
              </div>

              <div class="col-sm-3">
                 <label style="margin-top: 25px;">
                  <h3>Mixtrad <h5>(30mg)</h5></h3> 
                </label>
                  <h2 style="margin-top: 40px;">IN STOCK</h2>
              </div>
                
              <div class="col-sm-3" style=" margin-top: 30px;margin-left: 115px;">
                   <h3>Select quantity :</h3>
                   <select class="form-control" style="background: white;">
                        <option>1 ------ 12tk</option>
                        <option>2 ------ 24tk</option>
                        <option>3 ------ 36tk</option>
                        <option>4 ------ 48tk</option>
                        <option>6 ------ 56tk</option>
                        <option>7 ------ 64tk</option>
                        <option>8 ------ 72tk</option>
                        <option>9 ------ 84tk</option>
                        <option>10 ------ 96tk</option>
                        <option>11 ------ 108tk</option>
                   </select>
               </div>
               <div class="col-sm-2">
                       <input id = "btnAddToCart" class="btn btn-success" type="submit" name="btnAddToCart" value="ADD TO CART" style="margin-top: 10px; background: rgb(255, 115, 38); margin-top: 79px; margin-left: 5px; height: 40px;" >
               </div>

 </div>

 <div class="row">
               
               <div class="col-sm-3">
                   <label style="margin-top: 25px;">
                     <h4>Tk. : 55.00 (per unit)</h4> 
                   </label>       
               </div>  

 </div>
</form>

@endsection