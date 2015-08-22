@extends('admin.layout')

@section('content')
<section class="tags">
	<div class="row">
		<div class="small-12 columns">
			<h2>Create New Tag</h2>
			@include('admin.partials.errors')

			<form class="panel" method="POST" action="/admin/tag">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<label for="tag">Tag</label>
				<input type="text" class="radius" name="tag" id="tag" value="{{ $tag }}" required>

				@include('admin.tag._form')

				<button type="submit" class="button expand radius">Add New Tag</button>
			</form>
		</div>
	</div>
</section>
@stop