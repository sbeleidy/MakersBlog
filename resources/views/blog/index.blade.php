<!DOCTYPE html>
<html>
<head>
	<title>{{ config('blog.title') }} </title>
</head>
<body>
	<section class="base">
		<div class="row">
			<div class="small-12">
				<h1>{{ config('blog.title') }}</h1>
				<h5>Page {{ $posts->currentPage() }} of {{ $posts->lastPage() }}</h5>
				<ul>
				@foreach ($posts as $post)
					<li>
						<a href="/blog/{{ $post->slug }}">{{ $post->title }}</a>
						({{ $post->published_at->format('M jS Y g:ia') }})
						<p>{{ str_limit($post->content) }}</p>
						<p>{{ $post->created_at }}</p>
					</li>
				@endforeach

				{!! $posts->render() !!}
			</div>
		</div>
	</section>
</body>
</html>