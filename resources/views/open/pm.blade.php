@extends('layouts.app')

@section('title', $postType)

@section('content_css')
<link href="{{ asset('css/open/main.css') }}" rel="stylesheet">
@endsection

@section('content_js')
<script src="http://maps.google.com/maps/api/js?key=AIzaSyAQpaNq3ytN3ktWcrk6_Gj2lCo3uKr--ds&callback=initMap" async defer type="text/javascript"></script>
<script type="text/javascript" src="{{ asset('/js/open/pm.js') }}"></script>
@endsection

@section('content')
<div class="container">
	<div class="title-menu">
		<div class="title"><a href="{{ url('/home') }}">首頁</a></div>
		<div class="title-col">
			<div class="excerpt">{{ $postType }}</div>
		</div>
	</div>
</div><!-- /.container -->

<div class="container">
  <div class="page-header">
  	<h1>{{ $postType }}</h1>
	<small>提供全台PM2.5 細懸浮微粒指標</small>
  </div>
  <div class="row">
	<div class="col-sm-9">
		<div id="mapObj"></div>
	</div><!-- end col-sm-9 -->

	<div class="col-sm-3">
	  <div class="well">
			<div class="row">
				<h4>各地區詳細資料</h4>
				<div class="col-xs-6">
					<ol class="list-unstyled">
					  <li><a class="item">全台灣</a></li>
					  <li><a class="item">基隆市</a></li>
					  <li><a class="item">臺北市</a></li>
					  <li><a class="item">新北市</a></li>
					  <li><a class="item">桃園市</a></li>
					  <li><a class="item">新竹市</a></li>
					  <li><a class="item">新竹縣</a></li>
					  <li><a class="item">宜蘭縣</a></li>	  
					  <li><a class="item">苗栗縣</a></li>
					  <li><a class="item">臺中市</a></li>
					  <li><a class="item">彰化縣</a></li>
					</ol>
				</div>
				<div class="col-xs-6">
					<ol class="list-unstyled">
					  <li><a class="item">南投縣</a></li>
					  <li><a class="item">雲林縣</a></li>
					  <li><a class="item">嘉義市</a></li>
					  <li><a class="item">嘉義縣</a></li>
					  <li><a class="item">臺南市</a></li>
					  <li><a class="item">高雄市</a></li>
					  <li><a class="item">屏東縣</a></li>
					  <li><a class="item">澎湖縣</a></li>	  
					  <li><a class="item">花蓮縣</a></li>
					  <li><a class="item">臺東縣</a></li>
					  <li><a class="item">金門縣</a></li>
					  <li><a class="item">連江縣</a></li>
					</ol>
				</div>
			</div><!-- end row -->
	  </div><!-- end well-->
	  
	  <div class="well well-sm">
		<h4>狀態</h4>
		<h5>最新更新時間：<div id="update_time"></div></h5>
		<div id="PSI_value"></div>
	  </div><!-- end well -->

	  <div class="row">
		<div class="col-xs-6 col-sm-12">
		  <div class="well well-sm">
			<h4>顏色表示</h4>
			<ol class="list-unstyled">
			  <li><span class="list_color" style="background:#00ff00;">&#60;=35 低</span></li>
			  <li><span class="list_color" style="background:#ffdd00;">&#60;=53 中</span></li>
			  <li><span class="list_color" style="background:#ff0000;">&#60;=70 高</span></li>
			  <li><span class="list_color" style="color:white;background:#800080;">&#62;71 非常高</span></li>
			</ol>
		  </div>
		</div>
		<div class="col-xs-6 col-sm-12">
		  <div class="well well-sm">
			<h4>Google AdSense</h4>
		  </div>
		</div>
	  </div>

	</div><!-- end col-sm-3 -->

  </div><!-- /.row -->

</div><!-- /.container -->
@endsection
