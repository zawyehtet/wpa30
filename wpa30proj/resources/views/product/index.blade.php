@extends("layouts.master")
@section("content")	
	<div class="row">
		<div class="col-12">
			<router-link to="/products">Go to Example</router-link>	
			<router-link to="/products/blog">Go to Blog</router-link>
			<router-link to="/products/test">Go to Test</router-link>	
			<router-view></router-view>
		</div>
	</div>
@endsection