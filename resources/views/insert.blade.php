@extends('layout1')

@section('body-content')
<form action="{{url('/storeMedicine')}}" method="POST" role="form" enctype="multipart/form-data">
	{{csrf_field()}}
	<legend>Medicine Insertion</legend>
    <div>
    	@if(session('msg'))
    		<div class="alert alert-success">
    			{{session('msg')}}
    		</div>
    	@endif
    </div>
	<div class="form-group">

       <div class="form-group row">
		    <label for="">Image</label>
			<div>
			   <input type="file" class="form-control" id="" name="image" placeholder="Input field">
		    </div>
       </div>
      
       <div class="form-group row">
		  <label for="example-text-input" class="col-2 col-form-label">Medicine Name</label>
		  <div class="col-10">
		    <input class="form-control" type="text" value="{{old('name')}}" name="name" id="example-text-input">
		  </div>
		</div>

		<div class="form-group row">
		  <label for="example-text-input" class="col-2 col-form-label">Description</label>
		  <div class="col-10">
		  <textarea name="descr" id="message" class="form-control" rows="9" cols="25"></textarea>

		  </div>
		</div>

		<div class="form-group row">
		  <label for="example-search-input" class="col-2 col-form-label">Unit Price</label>
		  <div class="col-10">
		    <input class="form-control" type="number" step="any" value="{{old('unit')}}" name="unit" id="example-search-input">
		  </div>
		</div>

		<div class="form-group row">
		  <label for="example-email-input" class="col-2 col-form-label">Quantity</label>
		  <div class="col-10">
		    <input class="form-control" type="number" value="{{old('quantity')}}" name="quantity" id="example-email-input">
		  </div>
           <button type="submit" class="btn btn-primary">Add</button>
		</div>

	
</form>
@endsection