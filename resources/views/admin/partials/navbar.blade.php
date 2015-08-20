<!-- Right Nav Section -->
	    <ul class="right">
	      @if (Auth::check())
	      	<li @if (Request::is('admin/post*')) class="active" @endif>
	      		<a href="/admin/post">Post</a>
	      	</li>
	      	<li @if (Request::is('admin/tag*')) class="active" @endif>
	      		<a href="/admin/tag">Tags</a>
	      	</li>
	      	<li @if (Request::is('admin/upload*')) class="active" @endif>
	      		<a href="/admin/upload">Uploads</a>
	      	</li>
	      @endif

	      @if (Auth::guest())
	      	<li><a href="/auth/login">Login</a></li>
	      @else 
	      	<li>
	      		<a href="#" class="">{{ Auth::user()->name }}</a>
	      	</li>
	      	<li><a href="/auth/logout">Logout</a></li>
	      @endif
	    </ul>