@extends('layouts.main')
@section('container')
{{ $category->name }}<br>
@foreach(category->posts as $post)
{{ $post->title }}<br>
@endforeach
@endsection