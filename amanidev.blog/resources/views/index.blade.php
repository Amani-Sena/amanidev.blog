<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Início - amaniDev Blog</title>
    <script src="https://kit.fontawesome.com/a2b163b64e.js" crossorigin="anonymous" defer></script>

    @vite('public/css/app.css')
</head>
<body>
    <header id="header">
        <div class="header-logo">
            <a href="/"><img src="{{ asset('img/logo-blog.webp') }}" alt="Logo amaniDev Blog"></a>
        </div>
        <nav class="header-nav">
            <a href="/" class="nav-link">Início</a>
            <a href="/blog" class="nav-link">Blog</a>
            <a href="https://amanidev.com/#br" class="nav-link">Portfólio</a>
        </nav>

        <div class="btn-menu" id="btn-menu" onclick="openMenu('con-side-menu-op')">
            <div class="line-1"></div>
            <div class="line-2"></div>
        </div>

        <div class="con-side-menu-op close-side-menu" id="con-side-menu-op">
            <div class="side-menu">
                <div class="con-side-menu">
                    <div class="menu-header">
                        <h5>Menu</h5>
                        <div class="menu-line"></div>
                    </div>
                    <ul class="nav-list">
                        <li>
                            <h1 id="home-menu"><a href="/" id="home_menu">Início</a></h1>
                        </li>
                        <li>
                            <a href="/blog"><h1 id="about-menu">Blog</h1></a>
                        </li>
                        <li>
                            <h1><a href="https://amanidev.com" target="_blank" id="blog_menu">Portfólio</a></h1>
                        </li>
                    </ul>
                    <div class="menu-contact">
                        <h5 id="hello_menu">Diga Olá</h5>
                        <div class="menu-contact-icons">
                            <a href="https://wa.me/+5521970600875" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
                            <a href="https://github.com/Amani-Sena" target="_blank"><i class="fa-brands fa-github"></i></a>
                            <a href="https://www.linkedin.com/in/amani-sena-632231252/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="https://www.instagram.com/amanidev_/" target="_blank"><i class="fa-brands fa-instagram"></i></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <section class="bg-hero" id="hero">
            <div class="con-video-hero">
                <video autoplay muted loop id="video-hero" data-aos="zoom-out" data-aos-delay="1600"
                    data-aos-duration="1400" preload="auto" poster="img/poster_hero.webp">
=======
@extends('layouts.app')
@section('title', 'Início - amanidev.blog')
    
@section('content')
        <section class="bg-hero" id="hero">
            <div class="con-video-hero">
                <video autoplay muted loop id="video-hero" preload="auto" poster="img/poster_hero.webp">
>>>>>>> 37b3945 (Atualizações de performance e do Readme)
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
<<<<<<< HEAD
                <a href="#" class="category-link selected">Todos os posts</a>
                @foreach ($categories as $category)
                <a href="#" class="category-link">{{ $category->name }}</a>
                @endforeach
                <a href="#" class="category-link"></a>
=======
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
>>>>>>> 37b3945 (Atualizações de performance e do Readme)
                
            </div>
            <div class="posts-grid-container">
                @foreach ($posts as $post)
                    <div class="post-grid-item">
<<<<<<< HEAD
                        <img src="storage/{{ $post->image }}" alt="Post Thumbnail">
                        <h4>{{ $post->title }}</h4>
                        <span>{{ $post->created_at }}</span>
                        <p>{{ strip_tags($post->content) }}</p>
                        <div class="post-grid-btn"><a href="/post/{{$post->id}}">Ver mais</a><em>></em></div>
=======
                        <a href="/post/{{$post->id}}">
                            <img src="{{ asset('storage/'.$post->image) }}" alt="Post Thumbnail">
                            <h4>{{ $post->title }}</h4>
                            <span>{{ $post->created_at }}</span>
                            <p>{{ strip_tags($post->content) }}</p>
                            <div class="post-grid-btn"><a href="/post/{{$post->id}}">Ver mais</a><em>></em></div>
                        </a>
>>>>>>> 37b3945 (Atualizações de performance e do Readme)
                    </div>
                @endforeach
                
                
            </div>

<<<<<<< HEAD
=======
        <a href="/posts">
>>>>>>> 37b3945 (Atualizações de performance e do Readme)
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
<<<<<<< HEAD
        </section>

        <footer>
            <div class="footer-logo">
                <a href="/"><img src="{{ asset('img/logo-blog.webp') }}" alt="Logo amaniDev Blog"></a>
            </div>
            <div class="footer-social-icons">
                <a href="https://wa.me/+5521970600875"><i class="fa-brands fa-whatsapp"></i></a>
                <a href="https://github.com/Amani-Sena"><i class="fa-brands fa-github"></i></a>
                <a href="https://www.linkedin.com/in/amanidev/"><i class="fa-brands fa-linkedin"></i></a>
                <a href="https://www.instagram.com/amanidev_/"><i class="fa-brands fa-instagram"></i></a>
            </div>
        </footer>
    </main>

    <script src="./js/mobile-menu.js" defer></script>
    <script src="./js/handleScroll.js" defer></script>
    <script src="./js/category-selector.js" defer></script>
</body>
</html>
=======
        </a>
        </section>

    <script src="./build/assets/handleScroll-DKE7agFt.js" defer></script>
    <script src="./build/assets/category-selector-BFHWKwIN.js" defer></script>
    @endsection
>>>>>>> 37b3945 (Atualizações de performance e do Readme)
