<!DOCTYPE html>
<html>
<head>
	<title>{{ config('blog.title') }}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
	<nav class="top-bar" data-topbar role="navigation">
	  <ul class="title-area">
	    <li class="name">
	      <h1><a href="#">Makers Blog</a></h1>
	    </li>
	     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
	    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
	  </ul>

	  <section class="top-bar-section">
	    @include('admin.partials.navbar')
	  </section>
	</nav>
	@yield('content')
	<script src="/js/modernizr.js" type="text/javascript" charset="utf-8" async defer></script>
	<script src="/js/jquery.min.js" type="text/javascript" charset="utf-8" async defer></script>
	<script src="/js/foundation.js" type="text/javascript" charset="utf-8" async defer></script>
	<script src="/js/foundation.alert.js" type="text/javascript" charset="utf-8" async defer></script>
	<script src="/js/foundation.topbar.js" type="text/javascript" charset="utf-8" async defer></script>
	<script src="/js/foundation.reveal.js" type="text/javascript" charset="utf-8" async defer></script>
	<script src="/js/app.js" type="text/javascript" charset="utf-8" async defer></script>

	@yield('scripts')
</body>
</html>