<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>注册</title>
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
					<li><a href="/html5-xidian/index.php/Admin/login/index.html">登录</a></li>
					<li><a href="/html5-xidian/index.php/Admin/login/register.html">注册</a></li>
					<li><a href="#">退出</a></li>
				</ul>
			</div>
		</div>
		<!--head-->
		<div class="head">
			<div class="login-shouye">
				<a href=""><img src="/html5-xidian/Public/admin/images/home.png" alt="" width="22px" height="22px">首页</a>
			</div>
			<div class="head-title">
				<h3>爱尚西点后台管理系统</h3>
				<p>manager</p>
			</div>	
		</div>
		<!--content-->
		<div class="row content">
			<span id="res">用户已经注册</span>
			<form class="form form-horizontal register" style="margin: 110px 0 0 0;" enctype="multipart/form-data" method="post" action="<?php echo U('Admin/login/register_add');?>">
				<div class="control-group">
					<div class="controls">
						<img src="/html5-xidian/Public/admin/images/login.png" alt="" width="20" height="22px">
						<input id="input" class="username" type="text" placeholder="用户名：6-10位数字或者字母" name="username" />
					</div>
				</div>
				<div class="control-group">
					<div class="controls">
						<img src="/html5-xidian/Public/admin/images/password.png" alt="" width="22" height="22px">
						<input id="input" type="password"        class="password" placeholder="密码:6-10位数字或者字母" name="password" />
					</div>
				</div>
				<div class="control-group">
					<div class="controls">
						<img src="/html5-xidian/Public/admin/images/password.png" alt="" width="22" height="22px">
						<input id="input" type="password" class="rePassword" placeholder="确认密码" name="rePassword" />
					</div>
				</div>
				<div class="control-group">
					<div class="controls">
						<img src="/html5-xidian/Public/admin/images/name.png" alt="" width="22" height="22px">
						<input id="input" type="text" class="realname" placeholder="真实姓名" name="realname" />
					</div>
				</div>
				<div class="control-group">
					<div class="controls">
						<img src="/html5-xidian/Public/admin/images/telphone.png" alt="" width="22" height="22px">
						<input id="input" type="text" class="telphone" placeholder="手机号" name="telphone" />
					</div>
				</div>
				<div class="control-group">
					<div class="controls">
						<button type="submit" class="loginBtn" id="registerBtn">注册</button>
					</div>
					<div class="controls">
						<a href="login.html">登录</a>
					</div>
				</div>
			</form>
		</div>
	</div>
</body>
</html>