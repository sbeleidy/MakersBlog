<!DOCTYPE html>
<html>
<head>
	<title>{{ $post->title }}</title>
</head>
<body>
	<section class="blog">
		<div class="row">
			<div class="small-12 columns">
				<h2>{{ $post->title }}</h2>
				<h5>{{ $post->published_at->format('M jS Y g:ia')  }}</h5>
				{!! nl2br(e($post->content)) !!}
			</div>
		</div>
	</section>
</body>
</html>