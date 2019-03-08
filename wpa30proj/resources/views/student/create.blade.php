<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>
<body>
	<div class="container">
		<form method="post" action="{{ route('students.store') }}">
			<!-- @foreach($errors->all() as $message)
				<h1>{{ $message }}</h1>
			@endforeach -->
			@csrf
			<div class="form-group">
				<label for="name">Name :</label>
				<input name="name" type="text" class="form-control" id="student_name" placeholder="You Name" value="{{ old('name') }}">
				@if($errors->has("name"))
					<small class="form-text text-danger">
						{{ $errors->first('name') }}
					</small>
				@endif
  
			</div>
			<div class="form-group">
				<label for="address">Example textarea</label>
				<textarea name="address" class="form-control" id="student_address" rows="3" placeholder="You address">{{ old('address') }}</textarea>
				@if($errors->has("address"))
					<small class="form-text text-danger">
						{{ $errors->first('address') }}
					</small>
				@endif
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
		</div>
	</body>
	</html>