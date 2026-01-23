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
    background: #0f0f0f;
    color: #e5e5e5;
    line-height: 1.6;
}

/* NAVBAR */
nav {
    background: #000000;
    padding: 1rem 3rem;
    border-bottom: 1px solid #1f1f1f;
}

nav ul {
    list-style: none;
    display: flex;
    gap: 2.5rem;
}

nav a {
    color: #e5e5e5;
    text-decoration: none;
    font-weight: 600;
    position: relative;
}

nav a:hover {
    color: #3b82f6;
}

/* MAIN CONTAINER */
.container {
    max-width: 1100px;
    margin: 3rem auto;
    padding: 3rem;
    background: #141414;
    border-radius: 12px;
    box-shadow: 0 20px 40px rgba(0,0,0,0.7);
}

/* HEADINGS */
h1 {
    font-size: 2.2rem;
    margin-bottom: 1.2rem;
    color: #ffffff;
}

/* FOOTER */
footer {
    text-align: center;
    padding: 2rem;
    background: #000000;
    color: #9ca3af;
    font-size: 0.9rem;
    border-top: 1px solid #1f1f1f;
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
    </ul>
</nav>

<div class="container">
    @yield('content')
</div>

<footer>
    <p>&copy; {{ date('Y') }} My Portfolio. All rights reserved.</p>
</footer>

</body>
</html>
