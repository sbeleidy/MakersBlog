@extends('blog.layouts.master', [
	'title' => $post->title,
	'meta_description'	=> $post->meta_description ?: config('blog.description')
])

@section('page-header')
<header>
	<div class="row">
		<div class="small-12 columns">
			<h1>{{ $post->title }}</h1>
			<h2 class="subheading">{{ $post->subtitle }}</h2>
			<div class="meta">
				Posted on {{ $post->published_at->format('F j, Y') }}
				@if ($post->tags->count())
					in {!! join(', ', $post->tagLinks()) !!}
				@endif
			</div>
		</div>
	</div>
</header>
@stop

@section('content')
{{-- The Post --}}
<article>
	<div class="row">
		<div class="small-12 columns">
			{!! $post->content_html !!}
		</div>
	</div>	
</article>

{{-- The Pager --}}
<section class="pager">
	<div class="row">
		<div class="small-12 columns">
			<ul class="pager">
				@if ($tag && $tag->reverse_direction)
					@if ($post->olderPost($tag))
						<li class="previous">
							<a href="{!! $post->olderPost($tag)->url($tag) !!}">Previous {{ $tag->tag }} Post</a>
						</li>
					@endif
					@if ($post->newerPost($tag))
						<li class="next">
							<a href="{!! $post->newerPost($tag)->url($tag) !!}">Next {{ $tag->tag }} Post</a>
						</li>
					@endif
				@else
					@if ($post->newerPost($tag))
						<li class="previous">
							<a href="{!! $post->newerPost($tag)->url($tag) !!}">Next Newer {{ $tag ? $tag->tag : '' }} Post</a>
						</li>
					@endif
					@if ($post->olderPost($tag))
						<li class="next">
							<a href="{!! $post->olderPost($tag)->url($tag) !!}">Next Older {{ $tag ? $tag->tag : '' }} Post</a>
						</li>
					@endif
				@endif
			</ul>
		</div>
	</div>
</section>
@stop