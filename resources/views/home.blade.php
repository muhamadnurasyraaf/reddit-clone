@extends('layout.app')

@section('content')
    <h1>YOU ARE AUTHENTICATED</h1>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>

    <div>
        @foreach ($posts as $post)
            <div class="card">
                <div> Post : {{ $post->id }}</div>
                <h5>Title : {{ $post->title }}</h5>
                <p>{{ $post->content }}</p>
                <div>
                    Author : {{ $post->user->name }}
                </div>
            </div>
        @endforeach
    </div>
    <a href="{{ route('logout') }}"
        onclick="event.preventDefault();
             document.getElementById('logout-form').submit();">
        Logout
    </a>
@endsection
