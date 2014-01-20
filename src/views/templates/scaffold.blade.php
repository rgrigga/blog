<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
	{{HTML::style('packages/rgrigga/blog/css/blog.css')}}

	<style>
	</style>

	<link href="//vjs.zencdn.net/4.2/video-js.css" rel="stylesheet">
	<script src="//vjs.zencdn.net/4.2/video.js"></script>
	{{HTML::style('packages/rgrigga/video/css/video.css')}}
</head>
<body>

<!-- <div class="dev">
	<h1>Dev</h1>
	<p>This is a dev notice</p>
	<div class="alert">Alert</div>
	<div class="alert alert-warning">Warning</div>
</div> -->

{{--View::make('blog::vivio')--}}

<div class="top">
		Get Help:
</div>
{{--View::make('blog::pages.index')--}}
{{--View::make('blog::help')--}}
	<section id="main">
		@yield('main')
		<div class="sidebar">
				@section('sidebar')
				<div class="badge">Sidebar</div>
				@show
		</div>

	</section>
	<footer>
		<h1>That's it!</h1>
	</footer>
</body>
</html>
