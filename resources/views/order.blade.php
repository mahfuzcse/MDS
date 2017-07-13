@extends('layout1')

@section('body-content')


   
      <div class="">
        
        <p>&nbsp;</p>
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
                <div class="input-group">
                    <span class="input-group-addon" style="color: white; background-color: rgb(124,77,255);">SEARCH</span>
                    <input name="medicine" type="text" autocomplete="off" id="search" class="form-control input-lg" placeholder="Enter the Title Here" value="{{old('medicine')}}">
                </div>
            </div>
        </div>   
    </div>  
  
    <div id="txtHint">
      
    </div>
    @if($md)
   <form action="" method="POST" role="form">
     <legend>Medicine Details</legend>
   
     <div class="form-group">
       <label for="">Medicine Name :{{ $md->medicine_name}} </label>
    </div>
     
   
     
   
     <button type="submit" class="btn btn-primary">Submit</button>
   </form>
 @endif
<script type="text/javascript">
  
  $(document).ready(function(){
   $("#search").keyup(function(){
       var str=  $("#search").val();
       if(str == "") {
               $( "#txtHint" ).html("<b>Searching...</b>"); 
       }else {
               $.get( "{{ url('demos/livesearch?id=') }}"+str, function( data ) {
                   $( "#txtHint" ).html( data );  
            });
       }
   });  
}); 
</script>
@endsection
