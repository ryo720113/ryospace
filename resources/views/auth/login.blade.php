@extends('layouts.app')

@section('title','登入')

@section('content')

<div class="container">
    <div class="row">
        @include('layouts.partials.notification')
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">登入</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                        <!--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">-->
                        <label for="email" class="col-md-4 control-label">E-Mail 信箱</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" autofocus>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        </div><!-- /form-group -->

                        <div class="form-group">
                        <!--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">-->
                        <label for="password" class="col-md-4 control-label">密碼</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control" name="password" >

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        </div><!-- /form-group -->

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> 記住我
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary btn-block">
                                    Login
                                </button>
                            </div>
                            <div class="col-md-6 col-md-offset-4">
                                <span>
                                <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                    忘記密碼
                                </a>
                                </span>
                                <span>
                                <a class="pull-right btn btn-link" href="{{ url('/register') }}">
                                    註冊
                                </a>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <a href="redirect"><img src="{{ asset('images/fb_loginbutton.jpg') }}" height="40" width="40" /></a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
