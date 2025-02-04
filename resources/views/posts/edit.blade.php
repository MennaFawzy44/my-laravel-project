@extends('layouts.app')
@section('content')
    <h1>{{ isset($post) ? 'Edit Post' : 'Create Post' }}</h1>
    <form action="{{ isset($post) ? route('posts.update', $post->id) : route('posts.store') }}" method="POST">
        @csrf
        @if (isset($post))
            @method('PUT')
        @endif
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ isset($post) ? $post->title : old('title') }}">
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description">{{ isset($post) ? $post->description : old('description') }}</textarea>
        </div>
        <button type="submit">{{ isset($post) ? 'Update' : 'Create' }}</button>
    </form>
@endsection