<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>首页</title>
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
					<li><a href="/html5-xidian/index.php/Admin/login/login.html">登录</a></li>
					<li><a href="/html5-xidian/index.php/Admin/login/register.html">注册</a></li>
					<li><a href="#">退出</a></li>
				</ul>
			</div>
		</div>
		<!--head-->
		<div class="head">
			<div class="shouye">
				<a href="/html5-xidian/index.php/Admin/index/index.html"><img src="/html5-xidian/Public/admin/images/home.png" alt="" width="22px" height="22px">首页</a>
			</div>
			<div class="head-title">
				<h3>爱尚西点后台管理系统</h3>
				<p>manager</p>
			</div>	
		</div>
		<!--content-->
		<div class="row content">
			<!--slide-nav-->
			<div class="col-md-2 slideNav">
				<div class="panel-group" id="panel-320451">
					<div class="panel">
						<div class="panel-heading" >
							 <a class="panel-title" data-toggle="collapse" data-parent="#panel-320451" href="#panel-element-78753" style="text-decoration: none;"><img src="/html5-xidian/Public/admin/images/password.png" alt="" width="18px" height="18px">管理员管理</a>
						</div>
						<div id="panel-element-78753" class="panel-collapse collapse in" >
							<div class="panel-body">
								<a href="/html5-xidian/index.php/Admin/adminUsers/list.html">管理员管理</a>
							</div>
							<div class="panel-body">
								<a href="/html5-xidian/index.php/Admin/adminUsers/editInfo.html">修改个人信息</a>
							</div>
							<div class="panel-body">
								<a href="/html5-xidian/index.php/Admin/adminUsers/editPwd.html">修改密码</a>
							</div>
							<div class="panel-body">
								<a href="/html5-xidian/index.php/Admin/adminUsers/add.html">添加管理员</a>
							</div>
						</div>
					</div>
					<div class="panel">
						<div class="panel-heading">
							 <a class="panel-title" data-toggle="collapse" data-parent="#panel-320451" href="#panel-element-816153" style="text-decoration: none;"><img src="/html5-xidian/Public/admin/images/name.png" alt="" width="18px" height="18px">用户管理</a>
						</div>
						<div id="panel-element-816153" class="panel-collapse collapse">
							<div class="panel-body">
								<a href="/html5-xidian/index.php/Admin/user/list.html">用户管理</a>
							</div>
							<div class="panel-body">
								<a href="/html5-xidian/index.php/Admin/user/edit.html">修改用户信息</a>
							</div>
						</div>
					</div>
					<div class="panel">
						<div class="panel-heading">
							 <a class="panel-title" data-toggle="collapse" data-parent="#panel-320451" href="#panel-element-816154" style="text-decoration: none;"><img src="/html5-xidian/Public/admin/images/shop.png" alt="" width="18px" height="18px">商城管理</a>
						</div>
						<div id="panel-element-816154" class="panel-collapse collapse">
							<div class="panel-body">
								<a href="/html5-xidian/index.php/Admin/shop/list.html">商城管理</a>
							</div>
							<div class="panel-body">
								<a href="/html5-xidian/index.php/Admin/shop/add.html">添加商品</a>
							</div>
							<div class="panel-body">
								<a href="/html5-xidian/index.php/Admin/shop/edit.html">修改商品信息</a>
							</div>
						</div>
					</div>
					<div class="panel">
						<div class="panel-heading">
							 <a class="panel-title" data-toggle="collapse" data-parent="#panel-320451" href="#panel-element-816155" style="text-decoration: none;color: #fff;"><img src="/html5-xidian/Public/admin/images/food.png" alt="" width="18px" height="18px">美食管理</a>
						</div>
						<div id="panel-element-816155" class="panel-collapse collapse">
							<div class="panel-body">
								<a href="/html5-xidian/index.php/Admin/food/list.html">美食管理</a>
							</div>
							<div class="panel-body">
								<a href="/html5-xidian/index.php/Admin/food/add.html">添加美食</a>
							</div>
							<div class="panel-body">
								<a href="/html5-xidian/index.php/Admin/food/edit.html">修改美食信息</a>
							</div>
							<div class="panel-body">
								<a href="/html5-xidian/index.php/Admin/food/comment.html">管理美食评论</a>
							</div>
						</div>
					</div>
					<div class="panel">
						<div class="panel-heading">
							 <a class="panel-title" data-toggle="collapse" data-parent="#panel-320451" href="#panel-element-816156" style="text-decoration: none;color: #fff;"><img src="/html5-xidian/Public/admin/images/tag.png" alt="" width="18px" height="18px">标签管理</a>
						</div>
						<div id="panel-element-816156" class="panel-collapse collapse">
							<div class="panel-body">
								<a href="/html5-xidian/index.php/Admin/tag/list.html">标签管理</a>
							</div>
						</div>
					</div>
					<div class="panel">
						<div class="panel-heading">
							 <a class="panel-title" data-toggle="collapse" data-parent="#panel-320451" href="#panel-element-816157" style="text-decoration: none;color: #fff;"><img src="/html5-xidian/Public/admin/images/favorite.png" alt="" width="18px" height="18px">收藏夹管理</a>
						</div>
						<div id="panel-element-816157" class="panel-collapse collapse">
							<div class="panel-body">
								<a href="/html5-xidian/index.php/Admin/favorite/list.html">收藏夹管理</a>
							</div>
						</div>
					</div>
					<div class="panel">
						<div class="panel-heading">
							 <a class="panel-title" data-toggle="collapse" data-parent="#panel-320451" href="#panel-element-816158" style="text-decoration: none;color: #fff;"><img src="/html5-xidian/Public/admin/images/shopcart.png" alt="" width="18px" height="18px">购物车管理</a>
						</div>
						<div id="panel-element-816158" class="panel-collapse collapse">
							<div class="panel-body">
								<a href="/html5-xidian/index.php/Admin/cart/list.html">购物车管理</a>
							</div>
						</div>
					</div>
					<div class="panel">
						<div class="panel-heading">
							 <a class="panel-title" data-toggle="collapse" data-parent="#panel-320451" href="#panel-element-816159" style="text-decoration: none;color: #fff;"><img src="/html5-xidian/Public/admin/images/food_public.png" alt="" width="18px" height="18px">美食推送</a>
						</div>
						<div id="panel-element-816159" class="panel-collapse collapse">
							<div class="panel-body">
								<a href="/html5-xidian/index.php/Admin/public/public.html">美食推送</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-10">
			
				<!--breadcrumb-->
				<div class="col-md-12 bread">
					<ul class="breadcrumb">
						<li>
							 <a href="/html5-xidian/index.php/Admin/index/index.html">首页</a>
						</li>
					</ul>
				</div>
				<div class="col-md-12 viewList">
					<div class="col-md-6 view">
						<div class="col-md-3">
							<img src="/html5-xidian/Public/admin/images/admin.png" alt="" width="75px" height="60px">
						</div>
						<div class="col-md-9">
							<h4>管理员管理</h4>
							<p> 统一管理管理员账户，用于添加后台管理员及修改，删除管理员信息。</p>
							<a href="/html5-xidian/index.php/Admin/adminUsers/list.html"><button>点击进入</button></a>
						</div>
					</div>
					<div class="col-md-6 view">
						<div class="col-md-3">
							<img src="/html5-xidian/Public/admin/images/user.png" alt="" width="75px" height="60px">
						</div>
						<div class="col-md-9">
							<h4>用户管理</h4>
							<p>  同一管理管理员账户，可以添加删除或者修改用户信息。</p>
							<a href="/html5-xidian/index.php/Admin/user/list.html"><button>点击进入</button></a>
						</div>
					</div>
					<div class="col-md-6 view">
						<div class="col-md-3">
							<img src="/html5-xidian/Public/admin/images/foodmanage.png" alt="" width="75px" height="60px">
						</div>
						<div class="col-md-9">
							<h4>美食管理</h4>
							<p> 统一管理美食信息，可以添加美食图片，食材，步骤，并进行修改删除</p>
							<a href="/html5-xidian/index.php/Admin/food/list.html"><button>点击进入</button></a>
						</div>
					</div>
					<div class="col-md-6 view">
						<div class="col-md-3">
							<img src="/html5-xidian/Public/admin/images/shopmanage.png" alt="" width="75px" height="60px">
						</div>
						<div class="col-md-9">
							<h4>商城管理</h4>
							<p>  统一管理商城信息，可以对商城的食材和用具相关信息进行修改、删除，并上传美食信息。</p>
							<a href="/html5-xidian/index.php/Admin/shop/list.html"><button>点击进入</button></a>
						</div>
					</div>
					<div class="col-md-6 view">
						<div class="col-md-3">
							<img src="/html5-xidian/Public/admin/images/tagmanage.png" alt="" width="75px" height="60px">
						</div>
						<div class="col-md-9">
							<h4>标签管理</h4>
							<p> 可以根据美食信息添加可供用户选择的标签，并且可以修改删除标签。</p>
							<a href="/html5-xidian/index.php/Admin/tag/list.html"><button>点击进入</button></a>
						</div>
					</div>
					<div class="col-md-6 view">
						<div class="col-md-3">
							<img src="/html5-xidian/Public/admin/images/favoritemanage.png" alt="" width="75px" height="60px">
						</div>
						<div class="col-md-9">
							<h4>收藏夹管理</h4>
							<p>  统一管理用户在收藏夹中添加的美食信息，可以进行修改或者删除操作。</p>
							<a href="/html5-xidian/index.php/Admin/favorite/list.html"><button>点击进入</button></a>
						</div>
					</div>
					<div class="col-md-6 view">
						<div class="col-md-3">
							<img src="/html5-xidian/Public/admin/images/cartmanage.png" alt="" width="75px" height="60px">
						</div>
						<div class="col-md-9">
							<h4>购物车管理</h4>
							<p>  统一用户在购物车中添加的美食信息，可以进行修改或者删除操作。</p>
							<a href="/html5-xidian/index.php/Admin/cart/list.html"><button>点击进入</button></a>
						</div>
					</div>
					<div class="col-md-6 view">
						<div class="col-md-3">
							<img src="/html5-xidian/Public/admin/images/foodpublic.png" alt="" width="75px" height="60px">
						</div>
						<div class="col-md-9">
							<h4>美食推送</h4>
							<p>  添加用于在网站首页显示的美食信息，可以上传图片等信息。</p>
							<a href="/html5-xidian/index.php/Admin/public/public.html"><button>点击进入</button></a>
						</div>
					</div>
				</div>
			
			</div>
		</div>
	</div>
	
</body>
</html>