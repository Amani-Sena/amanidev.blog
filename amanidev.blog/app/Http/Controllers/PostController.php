<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller {

    public function index() {
        $posts = Post::where('is_published', true)->limit(9)->get();
        $categories = Category::whereHas('posts')->get();
        $selectedCategory = null;
        return view('index', compact('posts', 'categories', 'selectedCategory'));
    }
    
    public function postShow($slug_post) {
        $post = Post::where('slug', $slug_post)->firstOrFail();
        $tags = $post->tags;
        $categories = Category::whereHas('posts')->get();
        $recent_posts = Post::limit(4)->get();
        return view('posts.postShow', compact('post', 'categories', 'recent_posts', 'tags'));
    }

    public function postsShow() {
        $posts = Post::limit(12)->get();
        $categories = Category::whereHas('posts')->get();
        $selectedCategory = null;
        return view('posts.postsShow', compact('posts', 'categories', 'selectedCategory'));
    }

    // public function postsShowCategory($id_category) {
    //     $posts = Post::where('category_id', $id_category)->limit(12)->get();
    //     $categories = Category::whereHas('posts')->get();
    //     $selectedCategory = Category::find($id_category);
    //     return view('posts.postsShow', compact('posts', 'selectedCategory','categories'));
    // }

    public function postsSearch(Request $request) {
        // Pegando os parâmetros da URL
        $search = $request->input('search');
        $categoryId = $request->input('category');
    
        // Criar a consulta para buscar posts
        $query = Post::query();
    
        // Se existir um valor de busca, aplica o filtro
        if ($search) {
            $query->where('title', 'like', '%' . $search . '%');
        }
    
        // Se existir uma categoria, aplica o filtro
        if ($categoryId) {
            $query->where('category_id', $categoryId);
        }
    
        // Pegue os posts com paginação (12 posts por página)
        $posts = $query->paginate(12);
    
        // Recupera todas as categorias que têm posts
        $categories = Category::whereHas('posts')->get();
    
        // Se houver uma categoria selecionada, passamos ela para a view
        $selectedCategory = Category::find($categoryId);
    
        return view('posts.postsShow', compact('posts', 'categories', 'selectedCategory', 'search'));
    }

}
