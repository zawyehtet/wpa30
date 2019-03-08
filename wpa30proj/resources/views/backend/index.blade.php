<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
	<div class="container" id="app">
		<div class="row">
			<div class="col-md-12">
				<a class="btn btn-danger" href="{{ route('backend.logout') }}">LOGOUT</a>
			</div>
		</div>
	</div>

	<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>