@extends('admin.layout')

@section('content')
<section class="posts">
	<div class="row">
		<div class="small-12 columns">
			<h2>Posts</h2>
			<div class="pull-right"><a href="/admin/post/create" class="button radius">New Post</a></div>

			@include('admin.partials.errors')
			@include('admin.partials.success')

			<table width="100%">
				<thead>
					<tr>
						<th>Published</th>
						<th>Title</th>
						<th>Subtitle</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
				@foreach ($posts as $post)
					<tr>
						<td>{{ $post->published_at->format('j-M-y g:ia') }}</td>
						<td>{{ $post->title }}</td>
						<td>{{ $post->subtitle }}</td>
						<td>
							<a href="/admin/post/{{ $post->id }}/edit" class="button">Edit</a>
							<a href="/blog/{{ $post->slug }}">View</a>
						</td>
					</tr>
				@endforeach
				</tbody>
			</table>
		</div>
	</div>
</section>
@endsection