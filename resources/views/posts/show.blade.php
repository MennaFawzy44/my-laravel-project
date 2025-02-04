@extends('layouts.app')
@section('content')
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->description }}</p>
    <small>Created At: {{ $post->created_at->format('M d, Y H:i') }}</small>
    <a href="{{ route('posts.index') }}">Back</a>
@endsection