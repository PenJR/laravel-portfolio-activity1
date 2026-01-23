@extends('layout')

@section('title', 'My Hobbies')

@section('content')
<h1>My Hobbies</h1>

<div style="
    margin-top: 2.5rem;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 2rem;
">

@foreach($hobbies as $hobby)
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
            src="{{ asset($hobby['image']) }}"
            alt="{{ $hobby['name'] }}"
            style="
                width: 100%;
                height: 160px;
                object-fit: cover;
                border-radius: 10px;
                margin-bottom: 1rem;
            "
        >

        <h3 style="color: #ffffff; text-align: center;">
            {{ $hobby['name'] }}
        </h3>

    </div>
@endforeach

</div>
@endsection
