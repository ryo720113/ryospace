@extends('layouts.app')

@section('title', $post->title)

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <div class="post-heading">
                <h1>{{ $post->title }}</h1>
                <span class="meta">由 <a href="#">{{ $post->user->name }}</a> 發表於 {{ $post->created_at->toDateString() }}</span>
            </div>
        </div>
    </div>
</div>

<article>
	<div class="container">
	    <div class="row">
	        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

			@if (Auth::check() && $post->user->id === Auth::user()->id)
	        <div class="text-right" style="margin-bottom: 50px;">
	            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary" role="button">編輯</a>
	            <form action="{{ url('posts', $post->id) }}" method="post" style="display:inline">
	            	{{ csrf_field() }}
					{{ method_field('DELETE') }}
					<input type="submit" class="btn btn-danger" value="刪除">
	            </form>
	        </div>
			@endif


            <div style="margin-bottom: 80px;">
                {{ $post->content }}
            </div>

            <!-- Comments Form -->
			<div class="well">
				<h4>留下您的意見</h4>
				<form action="{{ action('PostsController@comment', $post->id) }}" method="post" role="form">
					{{ csrf_field() }}
					<div class="form-group">
						<label for="name">姓名</label>
						<input type="text" id="name" name="name" class="form-control">

						<label for="email">Email</label>
						<input type="text" id="email" name="email" class="form-control">

						<label for="content">內文</label>
						<textarea rows="3" id="content" name="content" class="form-control"></textarea>
						
						<!--<input type="hidden" name="post_id" value="{{ $post->id }}">-->
					</div>
					<input type="submit" class="btn btn-primary" value="送出">
				</form>
			</div>

			<!-- Post comments -->
			@foreach($post->comments as $comment)
			<div class="media">
				<div class="media-body">
					<h4 class="media-heading">{{ $comment->name }} ({{ $comment->email }})
						<samll>{{ $comment->created_at->toDateString() }}</samll>
					</h4>
					{{ $comment->content }}
				</div>
			</div>
			@endforeach

	    </div>
	</div>
</article>

@endsection