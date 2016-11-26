<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>登录</title>
	<link rel="stylesheet" href="/html5-xidian/Public/admin/css/bootstrap.css">
	<link rel="stylesheet" href="/html5-xidian/Public/admin/css/bootstrap-theme.css">
	<link rel="stylesheet" href="/html5-xidian/Public/admin/css/adminStyle.css">
	<script src="/html5-xidian/Public/admin/js/jquery.js"></script>
	<script src="/html5-xidian/Public/admin/js/bootstrap.js"></script>
	<script src="/html5-xidian/Public/admin/js/adminEditor.js"></script>	
</head>
<body>
	<div class="wrapper">
		<!--top-->
		<div class="top">
			<div class="logo">
				<img src="/html5-xidian/Public/admin/images/logo.png" alt="" width="199px" height="50px">
			</div>
			<div class="top-right">
				<ul>
					<li><a href="login.html">登录</a></li>
					<li><a href="register.html">注册</a></li>
					<li><a href="#">退出</a></li>
				</ul>
			</div>
		</div>
		<!--head-->
		<div class="head">
			<div class="login-shouye">
				<a href="index.html"><img src="/html5-xidian/Public/admin/images/home.png" alt="" width="22px" height="22px">首页</a>
			</div>
			<div class="head-title">
				<h3>爱尚西点后台管理系统</h3>
				<p>manager</p>
			</div>	
		</div>
		<!--content-->
		<div class="row content">
			<form role="form" class="form-horizontal login" style="margin: 110px 0 0 0;" enctype="multipart/form-data">
				<div class="control-group">
					<div class="controls">
						<img src="/html5-xidian/Public/admin/images/login.png" alt="" width="20" height="22px">
						<input id="input" class="userName" type="text" placeholder="请输入用户名" />
					</div>
				</div>
				<div class="control-group">
					<div class="controls">
						<img src="/html5-xidian/Public/admin/images/password.png" alt="" width="22" height="22px">
						<input id="input" type="password" class="passWord" placeholder="请输入密码" />
					</div>
				</div>
				<div class="control-group">
					<div class="controls">
							<label class="checkbox"><input type="checkbox" />记住我</label> 
							<button type="submit" class="loginBtn">登陆</button>
					</div>
					<div class="controls">
						<a href="register.html">注册</a>
					</div>
				</div>
			</form>
		</div>
	</div>
</body>
</html>