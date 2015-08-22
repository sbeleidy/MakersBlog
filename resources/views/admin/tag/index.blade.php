@extends('admin.layout')

@section('content')
<section class="tags">
	<div class="row">
		<div class="small-12 columns">
			<h2>Tags <span class="pull-right"><a href="/admin/tag/create" class="button radius"><i class="fa fa-plus-circle"></i> Add New Tag</a></span></h2>
		</div>
		<div class="small-12 columns">
			@include('admin.partials.errors')
        	@include('admin.partials.success')

			<table width="100%">
				<thead>
					<tr>
						<th>Tag</th>
						<th>Title</th>
						<th>Subtitle</th>
						<th>Page Image</th>
						<th>Description</th>
						<th>Layout</th>
						<th>Direction</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
				@foreach ($tags as $tag)
					<tr>
						<td>{{ $tag->tag }}</td>
						<td>{{ $tag->title }}</td>
						<td>{{ $tag->subtitle }}</td>
						<td>{{ $tag->page_image }}</td>
						<td>{{ $tag->meta_description }}</td>
						<td>{{ $tag->layout }}</td>
						<td>{{ $tag->reverse_direction }}</td>
						<td><a href="/admin/tag/{{ $tag->id }}/edit" class="button small">Edit</a></td>
					</tr>
				@endforeach
				</tbody>
			</table>
		</div>
	</div>
</section>
@stop