<?php

return [
	'name'	=> 'Makers Blog',
	'title' => 'Makers Blog',
	'subtitle'	=> 'The great blog',
	'description'	=> 'A blog built for Makers Cabin',
	'author'	=> 'Scrivs',
	'posts_per_page'	=> 5,
	'uploads'	=> [
		'storage'	=> 's3',
		'webpath'	=> 'https://s3-us-west-2.amazonaws.com/makersblog-uploads',
	],
	'page_image' => 'nexus.jpg',
	'contact_email'	=> env('MAIL_FROM'),
	'rss_size'	=> 10,
];