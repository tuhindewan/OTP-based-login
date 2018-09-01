<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form Field</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			@if ($errors->any())
			    <div class="alert alert-danger">
			        <ul>
			            @foreach ($errors->all() as $error)
			                <li>{{ $error }}</li>
			            @endforeach
			        </ul>
			    </div>
			@endif
			<div class="col-md-offset-4 col-md-4">
			<br>
				<form action="{{url('/form')}}" method="post">
					{{ csrf_field() }}
					<div class="form-group">
						<input class="form-control" type="text" name="name" placeholder="Name">
					</div>
					<div class="form-group">
						<input class="form-control" type="text" name="email" placeholder="Email">
					</div>

					<input type="submit" class="btn btn-success">
				</form>
			</div>
		</div>
	</div>
</body>
</html>