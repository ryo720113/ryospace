@extends('layouts.app')

@section('title', $postType)

@section('content')

<!-- Main Content -->
<div class="container">
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
			<form method="post" name="contactForm" id="contactForm" action="{{ url('/posts/store') }}">
				{{ csrf_field() }}
				<div class="form-group">
					<label for="title">標題</label>
					<input type="text" id="title" class="form-control" name="title" placeholder="請輸入文章標題" required>
				    <p class="help-block text-danger" style="color: red;">{{ $errors->first('title') }}</p>
				</div>

				<div class="form-group">
					<label for="content">內文</label>
					<textarea rows="5" id="content" class="form-control" name="content" placeholder="請輸入文章內文"></textarea>
					<p class="help-block text-danger" style="color: red;">{{ $errors->first('content') }}</p>
				</div>

				<div class="form-group">
					<label class="form-check-inline">設定是否為精選文章</label>
					<input  type="radio" class="form-check-input edit-radio" name="is_feature" value="1">是
					<input  type="radio" class="form-check-input edit-radio" name="is_feature" value="0">否
                	<p class="help-block text-danger" style="color: red;">{{ $errors->first('is_feature') }}</p>
				</div>

				<div class="form-group">
					<label class="form-check-inline">設定文章置頂</label>
					<input  type="radio" class="form-check-input edit-radio" name="is_top" value="1">是
					<input  type="radio" class="form-check-input edit-radio" name="is_top" value="0">否
                	<p class="help-block text-danger" style="color: red;">{{ $errors->first('is_top') }}</p>
				</div>

				<div class="form-group">
					<input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
					<input type="submit" class="btn btn-primary" value="送出">
				</div>
			</form>
		</div>
	</div>
</div>
@endsection