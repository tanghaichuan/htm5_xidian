<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>首页</title>
	<link rel="stylesheet" href="/html5-xidian/Public/admin/css/bootstrap.min.css">
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
								<a href="/html5-xidian/index.php/Admin/admin/list.html">管理员管理</a>
							</div>
							<div class="panel-body">
								<a href="/html5-xidian/index.php/Admin/admin/editInfo.html">修改个人信息</a>
							</div>
							<div class="panel-body">
								<a href="/html5-xidian/index.php/Admin/admin/editPwd.html">修改密码</a>
							</div>
							<div class="panel-body">
								<a href="/html5-xidian/index.php/Admin/admin/add.html">添加管理员</a>
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
						<li>
							 <a href="/html5-xidian/index.php/Admin/shop/list.html">商品管理</a>
						</li>
						<li>
							 <a href="#">商城列表</a>
						</li>
					</ul>
				</div>
				<!--userList-->
				<div class="col-md-12 userList">
					<div class="col-md-12">
						<h4>商城列表</h4>
					</div>
					<!--shop-->
					<div class="col-md-12">
						<table class="table table-striped table-hover">
							<thead>
								<tr>
									<th>库存</th>
									<th>名称</th>
									<th>图片</th>
									<th>价格(元)</th>
									<th>分类</th>
									<th>发布时间</th>
									<th>操作</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>111</td>
									<td>蜂蜜</td>
									<td><img src="/html5-xidian/Public/admin/images/shopList.png" alt="" width="70" height="38px"></td>
									<td>13</td>
									<td>食材</td>
									<td>2016-11-22</td>
									<td>
										<a href="">修改</a>
										<a href="">删除</a>
									</td>
								</tr>
								<tr>
									<td>111</td>
									<td>蜂蜜</td>
									<td><img src="/html5-xidian/Public/admin/images/shopList.png" alt="" width="70" height="38px"></td>
									<td>13</td>
									<td>食材</td>
									<td>2016-11-22</td>
									<td>
										<a href="">修改</a>
										<a href="">删除</a>
									</td>
								</tr>
								<tr>
									<td>111</td>
									<td>蜂蜜</td>
									<td><img src="/html5-xidian/Public/admin/images/shopList.png" alt="" width="70" height="38px"></td>
									<td>13</td>
									<td>食材</td>
									<td>2016-11-22</td>
									<td>
										<a href="">修改</a>
										<a href="">删除</a>
									</td>
								</tr>
								<tr>
									<td>111</td>
									<td>蜂蜜</td>
									<td><img src="/html5-xidian/Public/admin/images/shopList.png" alt="" width="70" height="38px"></td>
									<td>13</td>
									<td>食材</td>
									<td>2016-11-22</td>
									<td>
										<a href="">修改</a>
										<a href="">删除</a>
									</td>
								</tr>
								<tr>
									<td>111</td>
									<td>蜂蜜</td>
									<td><img src="/html5-xidian/Public/admin/images/shopList.png" alt="" width="70" height="38px"></td>
									<td>13</td>
									<td>食材</td>
									<td>2016-11-22</td>
									<td>
										<a href="">修改</a>
										<a href="">删除</a>
									</td>
								</tr>
							</tbody>
						</table>
						<!--pagination-->
						<div class="col-md-4 col-md-offset-8 page">
							<ul class="pagination">
								<li>
									 <a href="#"><<</a>
								</li>
								<li>
									 <a href="#">1</a>
								</li>
								<li>
									 <a href="#">2</a>
								</li>
								<li>
									 <a href="#">3</a>
								</li>
								<li>
									 <a href="#">4</a>
								</li>
								<li>
									 <a href="#">5</a>
								</li>
								<li>
									 <a href="#">>></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			
			</div>
		</div>
	</div>
	
</body>
</html>