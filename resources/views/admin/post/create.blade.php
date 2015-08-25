@extends('admin.layout')

@section('styles')
<link href="/assets/pickadate/themes/default.css" rel="stylesheet">
<link href="/assets/pickadate/themes/default.date.css" rel="stylesheet"> 
<link href="/assets/pickadate/themes/default.time.css" rel="stylesheet"> 
<link href="/assets/selectize/css/selectize.css" rel="stylesheet">
@stop

@section('content')
<section class="post">
	<div class="row">
		<div class="small-12 columns">
			<h2>Add New Post</h2>

			@include('admin.partials.errors')

			<form method="POST" action="{{ route('admin.post.store') }}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				@include('admin.post._form')

				<button type="submit" class="button">Save New Post</button>
			</form>
		</div>
	</div>
</section>
@stop


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
create: true });
});
</script>
@stop