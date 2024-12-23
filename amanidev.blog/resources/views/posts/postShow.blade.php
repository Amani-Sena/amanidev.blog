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
            <a href="/" class="nav-link-alt">Início</a>
            <a href="/blog" class="nav-link-alt">Blog</a>
            <a href="https://amanidev.com/#br" class="nav-link-alt">Portfólio</a>
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
        
        <section id="section-post">
            <div class="post-container">
                <div class="post-content">
                    <h1>{{ $post->title }}</h1>
                    <img class="post-img" src="../storage/{{$post->image}}" alt="Imagem do Post">
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
                            <img src="../storage/{{$post->image}}" alt="Imagem do Post">
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

    <script src="./../js/mobile-menu.js" defer></script>
</body>
</html>