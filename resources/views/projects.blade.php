@extends('layout')


@section('title', 'My Projects')


@section('content')
<h1>My Projects</h1>

<div style="
    margin-top: 2.5rem;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 2rem;
">

<div style="
    margin-top: 2.5rem;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 2rem;
">

@foreach($projects as $project)
    <div style="
        background: rgba(15, 23, 42, 0.75);
        backdrop-filter: blur(8px);
        border: 1px solid rgba(255,255,255,0.08);
        padding: 2rem;
        border-radius: 14px;
        box-shadow: 0 20px 40px rgba(0,0,0,0.5);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    "
    onmouseover="this.style.transform='translateY(-6px)'; this.style.boxShadow='0 30px 60px rgba(0,0,0,0.7)'"
    onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 20px 40px rgba(0,0,0,0.5)'"
    >

    <img
            src="{{ asset($project['image']) }}"
            alt="{{ $project['title'] }}"
            style="
                width: 100%;
                height: 160px;
                object-fit: cover;
                border-radius: 10px;
                margin-bottom: 1rem;
            "
        >
        <h3 style="color: #ffffff; margin-bottom: 0.75rem;">
            {{ $project['title'] }}
        </h3>

        <p style="color: #cbd5f5; font-size: 0.95rem; line-height: 1.6;">
            {{ $project['description'] }}
        </p>
    </div>
@endforeach


</div>
@endsection

