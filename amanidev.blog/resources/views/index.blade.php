@extends('layouts.app')
@section('title', 'Início - amanidev.blog')

@section('content')
    <section class="bg-hero">
        <div class="hero">
            <h1>Simplificando</h1>
            <h1 class="hero_text"></h1>
            <div class="hero-icons">
                <a href="https://wa.me/+5521970600875" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
                <a href="https://github.com/Amani-Sena" target="_blank"><i class="fa-brands fa-github"></i></a>
                <a href="https://www.linkedin.com/in/amani-sena-632231252/" target="_blank"><i
                        class="fa-brands fa-linkedin"></i></a>
                <a href="https://www.instagram.com/amanidev_/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
            </div>
            <i class="fa-solid fa-chevron-down up-down" id="down-hero"></i>
        </div>
    </section>

    <section id="section-posts">
        <div class="posts-categories-row">
            @php
                $search = request('search');
            @endphp

            <a href="{{ route('posts.index', ['search' => $search]) }}"
                class="category-link {{ $selectedCategory ? '' : 'selected' }}">
                Todos os posts
            </a>

            @foreach ($categories as $category)
                <a href="{{ route('posts.index', ['category' => $category->id, 'search' => $search]) }}"
                    class="category-link {{ $selectedCategory && $selectedCategory->id == $category->id ? 'selected' : '' }}">
                    {{ $category->name }}
                </a>
            @endforeach
        </div>

        <div class="posts-grid-container">
            @foreach ($posts as $post)
                <div class="post-grid-item">
                    <a href="/post/{{ $post->slug }}">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="Post Thumbnail">
                        <h4>{{ $post->title }}</h4>
                        <span>{{ $post->created_at }}</span>
                        <p>{{ strip_tags($post->content) }}</p>
                        <div class="post-grid-btn"><a href="/post/{{ $post->id }}">Ver mais</a><em>></em></div>
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

    <script
        src="{{ asset('build/' . json_decode(file_get_contents(public_path('build/manifest.json')), true)['resources/js/category-selector.js']['file']) }}"
        defer></script>
    <script
        src="{{ asset('build/' . json_decode(file_get_contents(public_path('build/manifest.json')), true)['resources/js/writer.js']['file']) }}"
        defer></script>

@endsection
