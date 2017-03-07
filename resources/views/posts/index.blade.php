@extends('layouts.app')

@section('title', $postType)

@section('content')

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
        @if(Auth::check())
        <div class="text-right">
            <a href="{{ url('posts/create') }}" class="btn btn-primary" role="button">新增</a>
        </div>
        @endif

        @foreach($posts as $post)
            <div class="post-preview">
                <a href="{{ route('posts.show', $post->id) }}">
                    <h2 class="post-title">
                        {{ $post->title }}
                    </h2>
                </a>
                <p class="post-meta">由 <a href="#">{{ $post->user->name }}</a> 發表於 {{ $post->created_at->toDateString() }}</p>
            </div>
            <hr>
        @endforeach
        </div>
    </div>
</div>
@endsection