@extends('layouts.app')
@section('title', "$post->title - amanidev.blog")

@section('content')
    <section id="section-post">
        <div class="post-container">
            <div class="post-content">
                <h1>{{ $post->title }}</h1>
                <img src="{{ asset('storage/' . $post->image) }}" alt="Post Thumbnail">
                <p>{!! $post->content !!}</p>
            </div>
            <div class="post-alt-links">
                <div class="post-alt-title">
                    <h5>Categorias</h5>
                    <div class="div-line"></div>
                </div>
                @foreach ($categories as $category)
                    <a
                        href="{{ route('posts.index', ['category' => $category->id, 'search' => request('search')]) }}">{{ $category->name }}</a>
                @endforeach
                <div class="post-alt-title">
                    <h5>Posts Recentes</h5>
                    <div class="div-line"></div>
                </div>

                @foreach ($recent_posts as $recent_post)
                    @if ($recent_post->id != $post->id)
                        <a href="/post/{{ $recent_post->slug }}">
                            <div class="post-alt-post">
                                <img src="{{ asset('storage/' . $recent_post->image) }}" alt="Post Thumbnail">
                                <p>{{ $recent_post->title }}</p>
                            </div>
                        </a>
                    @endif
                @endforeach
                <div class="post-alt-title">
                    <h5>Tags</h5>
                    <div class="div-line"></div>
                </div>

                <div class="post-alt-tags">
                    @foreach ($tags as $tag)
                        <span>{{ $tag->name }}</span>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
