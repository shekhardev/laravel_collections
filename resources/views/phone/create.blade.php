<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Phone Number Validate</title>
	

<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<br>
	<div class="container">
	@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    	</div>
	@endif

	{!! Form::open(array('route' => 'phone.store'))  !!}
		 {{ csrf_field() }}
		
		<div class="form-group row">
			<div class="col-xs-2">
			  <label for="phonenum">Phone Number </label>
			  <input type="text" class="form-control" name="phone">
			</div>
		</div>
		
		<button type="submit" class="btn btn-success" >Submit</button>
	{!! Form::close() !!}
</div>


	
</body>
</html>