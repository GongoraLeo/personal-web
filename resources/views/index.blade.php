@extends('layouts.plantilla')

@section('title', 'Personal-web')

@section('blog')

    <div id="blog">
    @foreach ($posts as $post)
        <article class="blog">
            <h2><a href="{{ $post->title }}">{{ $post->title }}</a></h2>
                <br>
                <p>{{ $post->category }}</p>
                <!-- <img src="{{ $post->image }}" alt=""> -->
        </article>     
    @endforeach
    </div>

    {{ $posts->links() }}

@endsection

