<?php

namespace Makersblog;

use Makersblog\Post;
use Makersblog\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PostTableSeeder extends Seeder	
{
	public function run()
	{
		$tags = Tag::lists('tag')->all();

		Post::truncate();

		DB::table('post_tag_pivot')->truncate();

		factory(Post::class, 20)->create()->each(function ($post) use ($tags) {
			if (mt_rand(1, 100) <= 40) {
				return;
			}

			shuffle($tags);
			$postTags = [$tags[0]];

			if (mt_rand(1, 100) <= 40) {
				$postTags[] = $tags[1];
			}

			$post->syncTags($postTags);
		});
	}
}