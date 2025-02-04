@extends('layouts.app')
@section('content')
    <h1>Blog Posts</h1>
    @foreach ($posts as $post)
        <div>
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->description }}</p>
            <small>Created At: {{ $post->created_at->format('M d, Y H:i') }}</small>
            <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
            <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
    @endforeach
    {{ $posts->links() }} <!-- Pagination Links -->
@endsection