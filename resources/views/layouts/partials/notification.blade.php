@if (session()->has('errorMessage'))
    <div class="alert alert-danger alert-dismissible fade in" role="alert">
	    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	    <strong>錯誤！</strong> {{ session('errorMessage') }}
	</div>
@endif

@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade in" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong>成功！</strong> {{ session('success') }}
</div>
@endif