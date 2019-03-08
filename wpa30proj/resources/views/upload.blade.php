<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<form method="post" enctype="multipart/form-data" action="{{ route('post-file') }}">
					@csrf
					
					<div class="form-group">
						<label for="image">Example file input</label>
						<input name="image" type="file" class="form-control-file" id="image-file">
						@if($errors->has("image"))
					<small class="form-text text-danger">
						{{ $errors->first('image') }}
					</small>
				@endif
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
					

				</form>
			</div>
		</div>
	</div>
</body>
</html>