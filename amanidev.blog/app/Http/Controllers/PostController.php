<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller {

    public function index() {
        $posts = Post::where('is_published', true)->limit(6)->get();
        $categories = Category::whereHas('posts')->get();
        return view('index', compact('posts', 'categories'));
    }
    
    public function postShow($id_post) {
        $post = Post::find($id_post);
        $tags = $post->tags;
        $categories = Category::whereHas('posts')->get();
        $recent_posts = Post::limit(4)->get();
        return view('posts.postShow', compact('post', 'categories', 'recent_posts', 'tags'));
    }
}
