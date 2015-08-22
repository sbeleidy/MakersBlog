@extends('admin.layout')

@section('content')
<section class="tags">
	<div class="row">
		<div class="small-12 columns">
			<h2>Edit Tag &raquo; {{ $tag }}</h2>
			@include('admin.partials.errors')
			@include('admin.partials.success')

			<form action="/admin/tag/{{ $id }}" method="POST">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="hidden" name="_method" value="PUT">
				<input type="hidden" name="id" value="{{ $id }}">

				@include('admin.tag._form')

				<div class="row">
					<div class="small-6 columns">
						<button type="button" class="button alert radius" data-reveal-id="myModal">Delete</button>
					</div>
					<div class="small-6 columns">
						<button type="submit" class="button success radius">Save Changes</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>
<div id="myModal" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
  <h2 id="modalTitle">Are you sure you want to delete this tag?</h2>
  <p class="lead">Last chance!</p>
  <form method="POST" action="/admin/tag/{{ $id }}">
  	<input type="hidden" name="_token" value="{{ csrf_token() }}"> <input type="hidden" name="_method" value="DELETE">
	<button type="submit" class="button alert"><i class="fa fa-times-circle"></i> Delete</button>
  </form>
  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>
@stop