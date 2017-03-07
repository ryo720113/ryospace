@extends('layouts.app')

@section('title', '編輯文章')

@section('content')

<!-- Main Content -->
<div class="container">
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
			<form method="POST" name="sendMessage" id="sendMessage" action="{{ url('/posts', $post->id) }}">
				{{ csrf_field() }}
				{{ method_field('PATCH') }}
				<div class="control-group">
					<label for="title">標題</label>
					<input type="title" class="form-control" name="title" id="title" placeholder="請輸入文章標題" data-validation-required-message="輸入標題!!" value="{{ $post->title }}">
					<p class="help-block text-danger" style="color: red;">{!! $errors->first('title') !!}</p>
				</div>

				<div class="control-group">
					<label for="content">內文</label>
					<textarea rows="5" id="content" class="form-control" name="content" placeholder="請輸入文章內文">{{ $post->content }}</textarea>
					<p class="help-block text-danger" style="color: red;">{!! $errors->first('content') !!}</p>
				</div>

				<div class="control-group">
					<label class="form-check-inline">設定是否為精選文章</label>
					<input  type="radio" class="form-check-input edit-radio" name="is_feature" value="1" {{ ($post->is_feature)?"checked":"" }}>是
					<input  type="radio" class="form-check-input edit-radio" name="is_feature" value="0" {{ ($post->is_feature)?"":"checked" }}>否
                	<p class="help-block text-danger" style="color: red;">{{ $errors->first('is_feature') }}</p>
				</div>

				<div class="form-group">
					<label class="form-check-inline">設定文章置頂</label>
					<input  type="radio" class="form-check-input edit-radio" name="is_top" value="1" {{ ($post->is_top)?"checked":"" }}>是
					<input  type="radio" class="form-check-input edit-radio" name="is_top" value="0" {{ ($post->is_top)?"":"checked" }}>否
                	<p class="help-block text-danger" style="color: red;">{{ $errors->first('is_top') }}</p>
				</div>


                <div class="control-group">
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="送出">
                    </div>
                </div>

			</form>
		</div>
	</div>
</div>

@endsection