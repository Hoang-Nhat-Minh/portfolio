<?php

namespace App\Http\Controllers;

use TCG\Voyager\Models\Post;
use TCG\Voyager\Models\Category;

use App\ProfileInfo;
use App\Job;

class PostController extends Controller
{
    public function post($slug)
    {
        $profile_infos = ProfileInfo::first();
        $jobs = Job::get();

        $post = Post::where('slug', $slug)->first();
        $posts = Post::where('status', 'published')->orderBy('created_at', 'desc')->get();
        $post_category = Category::where('id', $post->category_id)->first();
        return view('frontend.post.index', compact('post', 'profile_infos', 'jobs', 'post_category', 'posts'));
    }
}
