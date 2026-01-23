@extends('layout')
@section('title', 'About Me')

@section('content')
<h1>About Me</h1>

<div style="margin-top: 2rem;">

    <!-- CENTERED SECTION -->
    <div style="text-align: center;">

        <img 
            src="{{ asset('images/profile.jpg') }}" 
            alt="Profile Picture"
            style="
                width: 160px;
                height: 160px;
                border-radius: 50%;
                object-fit: cover;
                margin-bottom: 1.5rem;
                border: 3px solid #3b82f6;
            "
        >

        <h2 style="color: #3498db;">{{ $name }}</h2>

        <p style="margin-top: 1rem; font-size: 1.1rem;">
            <strong>Course:</strong> {{ $course }}
        </p>

        <p style="margin-top: 0.5rem; font-size: 1.1rem;">
            <strong>University:</strong> {{ $university }}
        </p>

    </div>

    <!-- NORMAL TEXT (NOT CENTERED) -->
    <p style="margin-top: 2rem; line-height: 1.8;text-align: justify;">
        I am a passionate student learning web development with Laravel.
        I enjoy building web applications and solving problems through code.
        My goal is to become a game developer and create fun video games in the future.
    </p>

</div>
@endsection
