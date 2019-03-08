<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>
<body>
	<div class="container">
		<form method="post" action="{{ route('students.update', $student->id) }}">
			<!-- @foreach($errors->all() as $message)
				<h1>{{ $message }}</h1>
			@endforeach -->
			@csrf
			@method("patch")
			<div class="form-group">
				<label for="name">Name :</label>
			
				@if($errors->has("name"))
					<input name="name" type="text" class="form-control" id="student_name" placeholder="You Name" value="{{ old('name') }}">
					<small class="form-text text-danger">
						{{ $errors->first('name') }}
					</small>
				@else 
					<input name="name" type="text" class="form-control" id="student_name" placeholder="You Name" value="{{ $student->name }}">
				@endif
  
			</div>
			<div class="form-group">
				<label for="address">Example textarea</label>
				@if($errors->has("address"))
					<textarea name="address" class="form-control" id="student_address" rows="3" placeholder="You address">{{ old('address') }}</textarea>
					<small class="form-text text-danger">
						{{ $errors->first('address') }}
					</small>
				@else 
					<textarea name="address" class="form-control" id="student_address" rows="3" placeholder="You address">{{ $student->address }}</textarea>
				@endif

			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>
	</body>
	</html>