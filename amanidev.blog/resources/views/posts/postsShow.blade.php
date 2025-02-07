@extends('layouts.app_alt')
@section('title', "Posts - amanidev.blog")
    
@section('content')
        <section id="section-posts">
            <div class="posts-categories-row">
                @if ($selectedCategory != null)
                    <a href="/posts" class="category-link">Todos os posts</a>
                    <a href="/posts/{{$selectedCategory->id}}" class="category-link selected">{{ $selectedCategory->name }}</a>
                @else
                    <a href="/posts" class="category-link selected">Todos os posts</a>
                @endif
                @foreach ($categories as $category)
                    @if($selectedCategory != null)
                        @if($category->id != $selectedCategory->id)
                            <a href="/posts/{{$category->id}}" class="category-link">{{ $category->name }}</a>
                        @endif
                        @else
                            <a href="/posts/{{$category->id}}" class="category-link">{{ $category->name }}</a>
                    @endif
                @endforeach

                
                
            </div>
            <div class="posts-grid-container">
                @foreach ($posts as $post)
                    <div class="post-grid-item">
                        <a href="/post/{{$post->id}}">
                            <img src="{{ asset('storage/'.$post->image) }}" alt="Post Thumbnail">
                            <h4>{{ $post->title }}</h4>
                            <span>{{ $post->created_at }}</span>
                            <p>{{ strip_tags($post->content) }}</p>
                            <div class="post-grid-btn"><a href="/post/{{$post->id}}">Ver mais</a><em>></em></div>
                        </a>
                    </div>
                @endforeach
                
                
            </div>
        </section>

    <script src="./../js/category-selector.js" defer></script>

    @endsection
