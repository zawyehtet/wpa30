<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<form method="post" action="{{ route('items.store') }}">
					@csrf
					<input type="text" name="name" value="Hello Item">
					<input type="text" name="count" value="10">
					<input type="text" name="price" value="2300">
					<br>
					<select multiple class="form-control" id="select-categories" name="categories[]">
					@foreach($categories as $key=>$value) 
						<option value={{ $key }}>
							{{ $value }}
						</option>
					@endforeach
					</select>
					<br>
					<button type="submit" class="btn btn-success">Create</button>
				</form>
			</div>
		</div>
	</div>
	
	<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>
  <script>
  		$("#select-categories").select2();
  </script>
</body>
</html>