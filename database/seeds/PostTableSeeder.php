<?php

namespace Makersblog;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class PostTableSeeder extends Seeder	
{
	public function run()
	{
		Post::truncate();

		factory(Post::class, 20)->create();
	}
}