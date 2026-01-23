<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title', 'My Portfolio')</title>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Segoe UI', system-ui, sans-serif;
    color: #e5e7eb;
    line-height: 1.6;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    background:
        repeating-linear-gradient(
            45deg,
            rgba(255,255,255,0.03),
            rgba(255,255,255,0.03) 1px,
            transparent 1px,
            transparent 12px
        ),
        linear-gradient(180deg, #020617, #000000);
}

/* NAVBAR */
nav {
    padding: 1.2rem 3rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

nav ul {
    list-style: none;
    display: flex;
    gap: 2.5rem;
}

nav a {
    color: #e5e7eb;
    text-decoration: none;
    font-weight: 600;
    position: relative;
}

nav a::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: -6px;
    width: 0;
    height: 2px;
    background: #3b82f6;
    transition: width 0.3s ease;
}

nav a:hover::after {
    width: 100%;
}

/* WELCOME HEADER */
.hero-title {
    text-align: center;
    margin-top: 3rem;
    font-size: 2.8rem;
    font-weight: 700;
    color: #ffffff;
}

.container {
    max-width: 650px;
    width: 90%;
    min-height: 420px;
    margin: 3rem auto;
    padding: 2.5rem;

    background:
        repeating-linear-gradient(
            120deg,
            rgba(255,255,255,0.035),
            rgba(255,255,255,0.035) 1px,
            transparent 1px,
            transparent 18px
        ),
        repeating-linear-gradient(
            60deg,
            rgba(255,255,255,0.035),
            rgba(255,255,255,0.035) 1px,
            transparent 1px,
            transparent 18px
        ),
        rgba(15, 23, 42, 0.65);

    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);

    border-radius: 16px;
    border: 1px solid rgba(255,255,255,0.08);
    box-shadow:
        0 30px 60px rgba(0,0,0,0.6),
        inset 0 1px 0 rgba(255,255,255,0.05);

    display: flex;
    flex-direction: column;
    justify-content: center;
}

/* FOOTER */
footer {
    margin-top: auto;
    text-align: center;
    padding: 2.5rem 1rem;
    color: #9ca3af;
    font-size: 0.9rem;
}
</style>
</head>
<body>

<nav>
    <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('about') }}">About</a></li>
        <li><a href="{{ route('projects') }}">Projects</a></li>
        <li><a href="{{ route('contact') }}">Contact</a></li>
        <li><a href="{{ route('hobbies') }}">Hobbies</a></li>
    </ul>
</nav>

<!-- OUTSIDE THE GLASS CONTAINER -->
@hasSection('page-header')
    <h1 class="hero-title">@yield('page-header')</h1>
@endif

<div class="container">
    @yield('content')
</div>

<footer>
    <p>&copy; {{ date('Y') }} My Portfolio. All rights reserved.</p>
</footer>

</body>
</html>
