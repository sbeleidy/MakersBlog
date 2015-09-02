<p>You have received a new message from your website contact form.</p>

<p>Here are the details:</p>

<ul>
	<li>Name: {{ $name }}</li>
	<li>Email: {{ $email }}</li>
</ul>

<p>
	@foreach ($messageLines as $messageLine)
		{{ $messageLine }}<br>
	@endforeach
</p>