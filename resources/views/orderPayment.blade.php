@extends('layout1')

@section('body-content')

<form action="" method="" style="margin-left: 340px; margin-top: 200px">
	<div class="row">
			<div class="col-sm-6">
				<label>
					<input type="text" name="tnxId" placeholder="Enter The Transaction ID">
				</label>
			    <div class="text-center">
			        <button type="submit" class="btn btn-primary btn-lg"><span>Send</span></button>
			    </div>	
			</div>
	</div>
</form>


@endsection