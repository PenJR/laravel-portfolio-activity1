@extends('layout')

@section('title', 'Contact Me')

@section('content')
<h1>Contact Me</h1>

<div style="margin-top: 2rem;">
    <p style="font-size: 1.05rem; color: #cfcfcf; margin-bottom: 2rem;">
        Feel free to reach out to me through any of the following:
    </p>

    <div style="
        background: #1b1b1b;
        padding: 2rem;
        border-radius: 10px;
        border: 1px solid #2a2a2a;
    ">
        <p style="margin-bottom: 1.2rem;">
            <strong style="color:#ffffff;">Email:</strong>
            <a href="mailto:{{ $email }}" style="color: #3b82f6; text-decoration: none;">
                {{ $email }}
            </a>
        </p>

        <p>
            <strong style="color:#ffffff;">Phone:</strong>
            <span style="color:#cfcfcf;">{{ $phone }}</span>
        </p>
    </div>
</div>
@endsection
