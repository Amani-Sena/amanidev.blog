@extends('layouts.app')
@section('title', 'Posts - amanidev.blog')

@section('content')
    <section id="section-posts-show">
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
            @if (count($posts) == 0)
                <div class="container-without-posts">
                    <h4>Nenhum post encontrado. :(</h4>
                </div>
            @endif
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
    </section>

    <script
        src="{{ asset('build/' . json_decode(file_get_contents(public_path('build/manifest.json')), true)['resources/js/category-selector.js']['file']) }}"
        defer></script>


@endsection
