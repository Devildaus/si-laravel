@extends('dashboard.layouts.main')
@section('container')
<div class="container">
    <div class="row my-4">
        <div class="col-lg-8">
            <h2 class="mb-3" style="text-align:center;">{{ $post->title }}</h2>
            <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back To All My Post</a>
            <a href="#" class="btn btn-warning"><span data-feather="edit"></span> Edit </a>
            <a href="#" class="btn btn-danger"><span data-feather="x-circle"></span> Hapus</a>
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid mt-3" alt="/posts?category={{ $post->category->slug }}">
            <article class="my-3 fs-5">
                {!! $post->body !!}
            </article>
        </div>
    </div>
</div>
@endsection