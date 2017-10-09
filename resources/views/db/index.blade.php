<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Test</title>
	<link rel="stylesheet" href="">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
		<div class="container">
			<h1>Db Users</h1>
			<ul>
			@foreach($users as $user)
					<li>{{$user->id}}</li>
					<li>{{$user->name}}</li>
				@endforeach
			</ul>
		</div>
</body>
</html>

