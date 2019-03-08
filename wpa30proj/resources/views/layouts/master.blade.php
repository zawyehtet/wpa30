<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Post</title>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<link href="{{ asset('css/nprogress.css') }}" rel="stylesheet" />
</head>
<body>
	<div id="app" class="container">
		@yield("content")
	</div>
	
	<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>