<?php

namespace Makersblog\Http\Controllers;

use Illuminate\Http\Request;

use Makersblog\Jobs\BlogIndexData;
use Makersblog\Http\Requests;
use Makersblog\Http\Controllers\Controller;
use Makersblog\Tag;
use Makersblog\Post;
use Makersblog\Services\RssFeed;
use Carbon\Carbon;

class BlogController extends Controller
{
    
    public function index(Request $request)
    {
        $tag = $request->get('tag');
        $data = $this->dispatch(new BlogIndexData($tag));
    	$layout = $tag ? Tag::layout($tag) : 'blog.layouts.index';

    	return view($layout, $data);
    }

    public function showPost($slug, Request $request)
    {
    	$post = Post::with('tags')->whereSlug($slug)->firstOrFail();
        $tag = $request->get('tag');

        if ($tag) {
            $tag = Tag::whereTag($tag)->firstOrFail();
        }

        return view($post->layout, compact('post', 'tag', 'slug'));
    }

    public function rss(RssFeed $feed)
    {
        $rss = $feed->getRSS();

        return response($rss)->header('Content-type', 'application/rss+xml');
    }
}
