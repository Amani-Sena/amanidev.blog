@extends('layouts.app_alt')
@section('title', "$post->title - amanidev.blog")
    
@section('content')
        <section id="section-post">
            <div class="post-container">
                <div class="post-content">
                    <h1>{{ $post->title }}</h1>
                    <img src="{{ asset('storage/'.$post->image) }}" alt="Post Thumbnail">
                    <p>{!! $post->content !!}</p>
                </div>
                <div class="post-alt-links">
                    <div class="post-alt-title">
                        <h5>Categorias</h5>
                        <div class="div-line"></div>
                    </div>
                    @foreach ($categories as $category)
                        <a href="">{{ $category->name }}</a>
                    @endforeach
                    <div class="post-alt-title">
                        <h5>Posts Recentes</h5>
                        <div class="div-line"></div>
                    </div>
                    
                    @foreach ($recent_posts as $post)
                    <a href="/post/{{$post->id}}">
                        <div class="post-alt-post">
                            <img src="{{ asset('storage/'.$post->image) }}" alt="Post Thumbnail">
                            <p>{{$post->title}}</p>
                        </div>
                    </a>
                    @endforeach
                    <div class="post-alt-title">
                        <h5>Tags</h5>
                        <div class="div-line"></div>
                    </div>
                    
                        <div class="post-alt-tags">
                        @foreach ($tags as $tag)
                            <span>{{$tag->name}}</span>
                            @endforeach
                        </div>
                </div>
            </div>
        </section>

        @endsection
