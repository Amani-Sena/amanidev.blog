@extends('layouts.app')
@section('title', 'Início - amanidev.blog')
    
@section('content')
        <section class="bg-hero" id="hero">
            <div class="con-video-hero">
                <video autoplay muted loop id="video-hero" preload="auto" poster="img/poster_hero.webp">
                    <source src="img/bg_hero.mp4" type="video/mp4">
                </video>
            </div>
            <div class="hero">
                <h1>Simplificando código</h1>
                <h2>Traduzindo experiência</h2>
                <i class="fa-solid fa-chevron-down up-down"></i>
            </div>
        </section>

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

        <a href="/posts">
            <div class="buttons-form">
                <div class="form-btn">
                    <button type="submit" class="btn" id="form_btn">
                        <svg width="11.2rem" height="3.8rem" viewBox="0 0 181 61" class="border">
                            <polyline points="179,1 179,59 1,59 1,1 179,1" class="bg-line" />
                            <polyline points="179,1 179,59 1,59 1,1 179,1" class="hl-line" />
                        </svg>
                        <span id="form_submit">Ver mais</span>
                    </button>
                </div>
            </div>
        </a>
        </section>

    <script src="./build/assets/handleScroll-DKE7agFt.js" defer></script>
    <script src="./build/assets/category-selector-BFHWKwIN.js" defer></script>
    @endsection
