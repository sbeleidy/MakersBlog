@extends('blog.layouts.master', ['meta_description' => 'Contact Form'])

@section('page-header')
<header>
	<div class="row">
		<div class="small-12 columns">
			<h1>Contact Me</h1>
			<h2 class="subheading">Have Questions? I have answers.</h2>
		</div>
	</div>
</header>
@stop

@section('content')
<section class="content">
	<div class="row">
		<div class="small-12 columns">
			@include('admin.partials.errors')
			@include('admin.partials.success')

			<form action="/contact" method="post" accept-charset="utf-8">
				<input type="hidden" name="_token" value="{!! csrf_token() !!}">
				<label for="name">Name</label>
				<input type="text" id="name" name="name" required value="{{ old('name') }}">

				<label for="email">Email Address</label>
				<input type="email" id="email" name="email" value="{{ old('email') }}" required>

				<label for="message">Message</label>
				<textarea rows="8" id="message" name="message">{{ old('message') }}</textarea>

				<button type="submit" class="button">Send</button>
			</form>
		</div>
	</div>
</section>
@stop