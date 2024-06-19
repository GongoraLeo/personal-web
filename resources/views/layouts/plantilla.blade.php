<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- favicon -->
    @vite('resources/css/app.css')
</head>
<body>
<header>
    <h1>GongoraLeo</h1>
    <nav>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Blog</a></li>
            <li><a href="">Project</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Contact</a></li>
        </ul>
    </nav>
</header>

    @yield('blog')

    @yield('projects')


<footer>
    copyright Ou yeah
</footer>
</body>
</html>