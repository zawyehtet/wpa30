<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<br>
				<br>
				<a class="btn btn-success" href="{{ route('students.create') }}">Create Student</a>
				<hr>
				@if($students->count() > 0)
					<table class="table table-striped">
					<thead>
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Address</th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@foreach($students as $student)
							<tr>
								<td>{{ $student->id }}</td>
								<td>{{ $student->name }}</td>
								<td>{{ $student->address }}</td>
								<td><a href="{{ route('students.edit', $student->id) }}"><button class="btn btn-primary">Edit</button></a></td>
								<td>
									<form method="post" action="{{ route('students.destroy', $student->id) }}">
										@method('delete')
    									@csrf
									<button type="submit" class="btn btn-danger">Delete</button>
									</form>
								</td>
									
							</tr>
						@endforeach
					</tbody>
				</table>
				{{ $students->links() }}
				
				@else
					<h2>No Students</h2>
				@endif
				
			</div>
		</div>
	</div>
	
</body>
</html>