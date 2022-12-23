@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h2 class="mb-3" style="text-align:center;">{{ $post->title }}</h2>
            <p>By. <a href="/posts?author={{ $post->author->username }}"> {{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug}}"> {{ $post->category->name }}</a></p>
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid" alt="/posts?category={{ $post->category->slug }}">
            <article class="my-3 fs-5">
                {!! $post->body !!}
            </article>
            <a href="/blog">Back To Post</a>
        </div>
    </div>
</div>
@endsection