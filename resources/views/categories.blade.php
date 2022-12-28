@extends('layouts.main')

@section('container')

<h1 align=center>Post Categories</h1></br>


<div class="container">
    <div class="row">
        @foreach ($categories as $category)
        <div class="col-md-4" style="margin-bottom:10px; ">
            <a href="posts?category={{ $category->slug }}">
                <div class="card text-bg-dark" style="width: 300px; height: 300px;">
                    @if ($category->image)
                    <div style="max-height: 300px; overflow:hidden">
                        <img src="{{ asset('storage/' . $category->image) }}" class="img-fluid" alt="{{ $category->name}}">
                    </div>
                    @else
                    <img src="https://source.unsplash.com/500x500?{{ $category->name}}" class="card-img" style="width: 300px; height: 300px; margin:auto;" alt="{{ $category->name}}">

                    @endif

                    <div class="card-img-overlay d-flex align-items-center p-0">
                        <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0,0,0,0.7);border-radius: 20px;">{{ $category->name }}</h5>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection