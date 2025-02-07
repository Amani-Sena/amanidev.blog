<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller {

    public function index() {
<<<<<<< HEAD
        $posts = Post::where('is_published', true)->limit(6)->get();
        $categories = Category::whereHas('posts')->get();
        return view('index', compact('posts', 'categories'));
=======
        $posts = Post::where('is_published', true)->limit(9)->get();
        $categories = Category::whereHas('posts')->get();
        $selectedCategory = null;
        return view('index', compact('posts', 'categories', 'selectedCategory'));
>>>>>>> 37b3945 (Atualizações de performance e do Readme)
    }
    
    public function postShow($id_post) {
        $post = Post::find($id_post);
        $tags = $post->tags;
        $categories = Category::whereHas('posts')->get();
        $recent_posts = Post::limit(4)->get();
        return view('posts.postShow', compact('post', 'categories', 'recent_posts', 'tags'));
    }
<<<<<<< HEAD
=======

    public function postsShow() {
        $posts = Post::limit(12)->get();
        $categories = Category::whereHas('posts')->get();
        $selectedCategory = null;
        return view('posts.postsShow', compact('posts', 'categories', 'selectedCategory'));
    }

    public function postsShowCategory($id_category) {
        $posts = Post::where('category_id', $id_category)->limit(12)->get();
        $categories = Category::whereHas('posts')->get();
        $selectedCategory = Category::find($id_category);
        return view('posts.postsShow', compact('posts', 'selectedCategory','categories'));
    }
>>>>>>> 37b3945 (Atualizações de performance e do Readme)
}
