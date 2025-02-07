<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Simplificando o código, traduzindo a experiência!">
    <meta name="author" content="Amani, amanidev.blog">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="amanidev.blog">
    <meta property="og:description" content="Simplificando o código, traduzindo a experiência!">
    <meta property="og:image" content="https://blog.amanidev.com/img/amanidevblog.jpg">
    <title>@yield('title', '- amanidev.blog')</title>
    <script src="https://kit.fontawesome.com/a2b163b64e.js" crossorigin="anonymous" defer></script>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    @vite('resources/css/app.css')
</head>

<body>
    <header id="header">
        <div class="header-logo">
            <a href="/"><img src="{{ asset('img/logo-blog.webp') }}" alt="Logo amaniDev Blog"></a>
        </div>
        <nav class="header-nav">
            <a href="/" class="nav-link">Início</a>
            <a href="/posts" class="nav-link">Blog</a>
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
                            <a href="/posts"><h1 id="about-menu">Blog</h1></a>
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
    @yield('content')
</main>


<footer>
    <div class="footer-logo">
        <a href="/"><img src="{{ asset('img/logo-blog.webp') }}" alt="Logo amaniDev Blog"></a>
    </div>
    <div class="footer-social-icons">
        <a href="https://wa.me/+5521970600875" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
        <a href="https://github.com/Amani-Sena" target="_blank"><i class="fa-brands fa-github"></i></a>
        <a href="https://www.linkedin.com/in/amanidev/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
        <a href="https://www.instagram.com/amanidev_/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
    </div>
</footer>

<script src="./build/assets/mobile-menu-l0sNRNKZ.js" defer></script>
</body>
</html>