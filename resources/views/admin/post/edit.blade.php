@extends('admin.layout')

@section('styles')
<link href="/assets/pickadate/themes/default.css" rel="stylesheet">
<link href="/assets/pickadate/themes/default.date.css" rel="stylesheet"> 
<link href="/assets/pickadate/themes/default.time.css" rel="stylesheet"> 
<link href="/assets/selectize/css/selectize.css" rel="stylesheet">
@endsection

@section('content')
<section class="post">
	<div class="row">
		<div class="small-12 columns">
			<h2>Edit Post</h2>

			@include('admin.partials.errors')

			<form method="POST" action="{{ route('admin.post.update', $id) }}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="hidden" name="_method" value="PUT">

				@include('admin.post._form')
				<div class="row">
					<div class="small-4 columns">
						<button type="submit" class="button" name="action" value="continue">Save - Continue</button>
					</div>
					<div class="small-4 columns">
						<button type="submit" class="button" name="action" value="finished">Save - Finished</button>
					</div>
					<div class="small-4 columns">
						<a href="#" class="button alert" data-reveal-id="deleteModal">Delete</a>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>

{{-- Confirm Delete --}}
<div id="deleteModal" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
  <h2 id="modalTitle">Are you sure you want to delete this post?</h2>
  <p class="lead">Last chance!</p>
  <form method="POST" action="{{ route('admin.post.destroy', $id) }}">
  	<input type="hidden" name="_token" value="{{ csrf_token() }}">
  	<input type="hidden" name="_method" value="DELETE">
  	<button type="submit" class="success">Delete</button>
  </form>
  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>

@endsection


@section('scripts')
<script src="/assets/pickadate/picker.js"></script> 
<script src="/assets/pickadate/picker.date.js"></script> 
<script src="/assets/pickadate/picker.time.js"></script> 
<script src="/assets/selectize/selectize.min.js"></script> 
<script>
$(function() { $("#publish_date").pickadate({
        format: "mmm-d-yyyy"
      });
      $("#publish_time").pickatime({
        format: "h:i A"
      });
      $("#tags").selectize({
		create: true 
	});
});
</script>
@endsection