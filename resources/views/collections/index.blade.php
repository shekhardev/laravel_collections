<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Collections</title>
	<link rel="stylesheet" href="">

	 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
</head>
<body>
		<h1>Collections Test!</h1>
		@foreach ($Collections as $key => $value)
    Key: {{ $key }}    
    Value: {{ $value }} 
@endforeach

		{{-- @foreach($Collections as $Collection)
			{{$newCollection}}
		@endforeach
		print_r($newCollection,true);
		 --}}
</body>
</html>