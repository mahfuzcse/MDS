<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="{{url('/store')}}" method="POST" role="form" enctype="multipart/form-data">
{{csrf_field()}}
	<legend>Form title</legend>

	<div class="form-group">
		<label for="">label</label>
		<input type="file" class="form-control" id="" name="file" placeholder="Input field">
	</div>

	

	<button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>