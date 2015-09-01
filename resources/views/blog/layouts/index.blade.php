@extends('blog.layouts.master')

@section('page-header')
<header class="blog-header">
	<div class="row">
		<div class="small-12 columns">
			<h1>{{ $title }}</h1>
			<h2 class="subheader">{{ $subtitle }}</h2>
		</div>
	</div>
</header>
@stop

@section('content')
<section class="content">
	<div class="row">
		<div class="small-12 columns">
			{{-- The Posts --}}
			@foreach ($posts as $post)
			<div class="post-preview">
				<a href="{{ $post->url($tag) }}">
					<h2 class="post-title">{{ $post->title }}</h2>
					@if ($post->subtitle)
					<h3 class="post-subtitle">{{ $post->subtitle }}</h3>
					@endif
				</a>
				<p class="post-meta">
					Posted on {{ $post->published_at->format('F j, Y') }}
					@if ($post->tags->count())
						in {!! join(', ', $post->tagLinks()) !!}
					@endif
				</p>
			</div>
			@endforeach

			{{-- The Page --}}
			<ul class="pager">
				{{-- Reverse direction --}}
				@if ($reverse_direction)
					@if ($posts->currentPage () > 1)
						<li class="previous">
							<a href="{!! $posts->url($posts->currentPage() - 1) !!}">Previous {{ $tag->tag }} Posts</a>
						</li>
					@endif
					@if ($posts->hasMorePages())
						<li class="next">
							<a href="{!! $post->nextPageUrl() !!}">Next {{ $tag->tag }} Posts</a>
						</li>
					@endif
				@else
					@if ($posts->currentPage() > 1)
						<li class="previous">
							<a href="{!! $posts->url($posts->currentPage() - 1) !!}">New {{ $tag ? $tag->tag : '' }} Posts</a>
						</li>
					@endif
					@if ($posts->hasMorePages())
						<li class="next">
							<a href="{!! $posts->nextPageUrl() !!}">Older {{ $tag ? $tag->tag : '' }} Posts</a>
						</li>
					@endif
				@endif
			</ul>
		</div>
	</div>
</section>
@stop
