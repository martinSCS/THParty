<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>注册 - THParty</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
	<script type="application/javascript" src="https://cdn.staticfile.org/jquery/3.6.0/jquery.min.js"></script>
	<!--
	<link rel="stylesheet" href="/css/bootstrap.min.css" />
	<script type="application/javascript" src="/js/jquery-3.6.0.min.js"></script>
	<script type="application/javascript" src="/js/bootstrap.bundle.min.js"></script>
	-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@latest/font/bootstrap-icons.css" />
	<!--
	<link rel="stylesheet" href="/css/login.css" />
	-->
</head>
<body>
<div id="bgCover"></div>
@include("nav")
<div class="container my-5" id="mainContainer">
	<div class="row justify-content-center">
		<div class="card shadow-lg col-12 col-md-9 col-lg-6 opacity-75">
			<div class="card-body">
				<h4 class="card-title my-4 text-center">注册</h4>
				<form method="post" id="loginForm" action="/Action/Login">
					@csrf
					<div class="input-group mb-3">
						<span class="input-group-text" id="basic-addon1">+86</span>
						<input type="text" class="form-control" name="phone" id="phone" placeholder="手机号码" onkeydown="sub(event);">
					</div>
					<div class="mb-3">
						<input type="text" class="form-control" name="username" id="username" placeholder="用户名" onkeydown="sub(event);">
					</div>
					<div class="mb-3">
						<input type="password" class="form-control" name="password" id="password" placeholder="密码" onkeydown="sub(event);">
					</div>
					<div class="input-group mb-3">
						<input type="text" class="form-control" name="captcha" id="captcha" placeholder="手机验证码" onkeydown="sub(event);">
						<button class="btn btn-outline-success" type="button" id="button-addon2">发送验证码</button>
					</div>
					<div class="mb-3 form-check">
						<input type="checkbox" class="form-check-input" id="remember" name="remember">
						<label class="form-check-label" for="remember">记住我</label>
					</div>
				</form>
				<div class="row justify-content-around px-2 mt-4">
					<button onclick="$('#loginForm').submit();" class="btn btn-outline-primary col-6">注册</button>
				</div>
				<div class="row justify-content-around px-2 mt-4 text-center">
					<a href="#" class="text-muted">已有账号？点此登录</a>
				</div>
				<div class="px-2 my-4">
					@foreach($errors->all() as $error) <p class="text-center text-danger" id="warning">{{$error}}</p>@endforeach
				</div>
			</div>
		</div>
	</div>
</div>
@include("footer")
</body>
</html>
