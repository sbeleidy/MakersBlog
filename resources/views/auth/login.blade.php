@extends('admin.layout')

@section('content')
<section class="auth">
	<div class="row">
		<div class="small-12 medium-6 medium-offset-3 columns">
			@include('admin.partials.errors')

			<form class="panel" action="{{ url('auth/login') }}" method="POST" accept-charset="utf-8">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<label for="email">Email</label>
				<input type="email" name="email" value="{{ old('email') }}">

				<label for="password">Password</label>
				<input type="password" name="password">

				<input name="remember" type="checkbox"><label for="remember">Remember Me</label>

				<button type="submit" class="button radius expand">Login</button>
			</form>
		</div>
	</div>
</section>
@stop