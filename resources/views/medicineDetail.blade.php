@extends('layout1')

@section('body-content')
<div class="container">           
  <table class="table">
    <thead>
      <tr>
        <th>Image</th>
        <th>Name</th>
        <th>Discount(%)</th>
        <th>Quantity</th>
        <th>Action</th>
      </tr>
    </thead>

   

    <tbody>
      <tr>
        <td>
             <div class="form-group">
                <img src="images/xx55.jpg" alt="image-responsive" style="width: 80px;height: 80px;"></td>
             </div>
        <td>
            <div class="form-group">
               <label for="">{{ $md->medicine_name}} </label>
            </div>
        </td>
    
        <td>                       
           <div class="col-sm-4">
               <div class="input-group">
                   <span class="input-group-btn">
                       <button type="button" class="quantity-left-minus btn       btn-danger btn-number"  data-type="minus" data-field="">
                        <span class="glyphicon glyphicon-minus"></span>
                        </button>
                    </span>
                    <input type="text" id="quantity" name="quantity" class="form-control input-number" value="10" min="1" max="100">
                    <span class="input-group-btn">
                        <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field="">
                          <span class="glyphicon glyphicon-plus"></span>
                        </button>
                    </span>
               </div>
           </div>
        </td>
        <td>
	      <a href="#" class="btn btn-success pull-right" role="button">Add to cart</a>
	    </td>
      </tr>
     </tbody>
  </table>
</div>

<script type="text/javascript">
$(document).ready(function(){

var quantitiy=0;
   $('.quantity-right-plus').click(function(e){
        
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantity').val());
        
        // If is not undefined
            
            $('#quantity').val(quantity + 1);

          
            // Increment
        
    });

     $('.quantity-left-minus').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantity').val());
        
        // If is not undefined
      
            // Increment
            if(quantity>0){
            $('#quantity').val(quantity - 1);
            }
    });
    
});
</script>
@endsection