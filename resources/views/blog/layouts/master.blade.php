<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="{{ $meta_description }}">
	<title>{{ $title or config('blog.title') }}</title>
	{{-- Styles --}}
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	@yield('styles')
</head>
<body>
@include('blog.partials.page-nav')

@yield('page-header')
@yield('content')

@include('blog.partials.page-footer')

{{-- Scripts --}}
@yield('scripts')
</body>
</html>