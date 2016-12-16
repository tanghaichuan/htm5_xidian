<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>首页</title>
	<link rel="stylesheet" href="/html5-xidian/Public/admin/css/bootstrap.css">
	<link rel="stylesheet" href="/html5-xidian/Public/admin/css/bootstrap-theme.css">
	<link rel="stylesheet" href="/html5-xidian/Public/admin/css/adminStyle.css">
	<link rel="stylesheet" href="/html5-xidian/Public/admin/css/jq22.css">
	<script src="/html5-xidian/Public/admin/js/jquery.js"></script>
	<script src="/html5-xidian/Public/admin/js/bootstrap.js"></script>
	<script src="/html5-xidian/Public/admin/js/adminEditor.js"></script>		
	<script src="/html5-xidian/Public/admin/js/adminAjax.js"></script>
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
					<li><a href="/html5-xidian/index.php/Admin/login/index.html">欢迎：<?php echo ($username); ?></a></li>
					<li><a href="<?php echo U('Admin/adminUsers/quit');?>">退出</a></li>
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
			<div class="col-xs-2 col-md-2 slideNav">
				<div class="panel-group" id="panel-320451">
					<div class="panel">
						<div class="panel-heading" >
							 <a class="panel-title" data-toggle="collapse" data-parent="#panel-320451" href="#panel-element-78753" style="text-decoration: none;"><img src="/html5-xidian/Public/admin/images/password.png" alt="" width="18px" height="18px">管理员管理</a>
						</div>
						<div id="panel-element-78753" class="panel-collapse collapse in" >
							<div class="panel-body">
								<a href="/html5-xidian/index.php/Admin/adminUsers/index.html">管理员管理</a>
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
								<a href="/html5-xidian/index.php/Admin/user/index.html">用户管理</a>
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
								<a href="/html5-xidian/index.php/Admin/shop/index.html">商城管理</a>
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
								<a href="/html5-xidian/index.php/Admin/food/index.html">美食管理</a>
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
								<a href="/html5-xidian/index.php/Admin/tag/index.html">标签管理</a>
							</div>
						</div>
					</div>
					<div class="panel">
						<div class="panel-heading">
							 <a class="panel-title" data-toggle="collapse" data-parent="#panel-320451" href="#panel-element-816157" style="text-decoration: none;color: #fff;"><img src="/html5-xidian/Public/admin/images/favorite.png" alt="" width="18px" height="18px">收藏夹管理</a>
						</div>
						<div id="panel-element-816157" class="panel-collapse collapse">
							<div class="panel-body">
								<a href="/html5-xidian/index.php/Admin/favorite/index.html">收藏夹管理</a>
							</div>
						</div>
					</div>
					<div class="panel">
						<div class="panel-heading">
							 <a class="panel-title" data-toggle="collapse" data-parent="#panel-320451" href="#panel-element-816158" style="text-decoration: none;color: #fff;"><img src="/html5-xidian/Public/admin/images/shopcart.png" alt="" width="18px" height="18px">购物车管理</a>
						</div>
						<div id="panel-element-816158" class="panel-collapse collapse">
							<div class="panel-body">
								<a href="/html5-xidian/index.php/Admin/cart/index.html">购物车管理</a>
							</div>
						</div>
					</div>
					<div class="panel">
						<div class="panel-heading">
							 <a class="panel-title" data-toggle="collapse" data-parent="#panel-320451" href="#panel-element-816159" style="text-decoration: none;color: #fff;"><img src="/html5-xidian/Public/admin/images/food_public.png" alt="" width="18px" height="18px">美食推送</a>
						</div>
						<div id="panel-element-816159" class="panel-collapse collapse">
							<div class="panel-body">
								<a href="/html5-xidian/index.php/Admin/public/index.html">美食推送</a>
							</div>
							<div class="panel-body">
								<a href="/html5-xidian/index.php/Admin/public/add.html">添加推送</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-10 col-md-10 middle">
			
				<!--breadcrumb-->
				<div class="col-md-12 bread">
					<ul class="breadcrumb">
						<li>
							 <a href="/html5-xidian/index.php/Admin/index/index.html">首页</a>
						</li>
						<li>
							 <a href="/html5-xidian/index.php/Admin/user/index.html">
						</li>
						<li>
							 <a href="#">用户列表</a>
						</li>
					</ul>
				</div>
				<!--userList-->
				<div class="col-md-12 userList">
					<div class="col-md-12">
						<h4>用户列表</h4>
					</div>
					<!--userList-->
					<div class="col-md-12">
						<table class="table table-striped table-hover">
							<thead>
								<tr>
									<th>用户名</th>
									<th>真实姓名</th>
									<th>手机号</th>
									<th>注册时间</th>
									<th>操作</th>
								</tr>
							</thead>
							<tbody>
								<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$n): $mod = ($i % 2 );++$i;?><tr>
										<td><?php echo ($n["username"]); ?></td>
										<td><?php echo ($n["realname"]); ?></td>
										<td><?php echo ($n["telphone"]); ?></td>
										<td><?php echo ($n["reg_login_time"]); ?></td>
										<td>
											<a href="editInfo/id/<?php echo ($n["id"]); ?>" >修改</a>
											<a href="del/id/<?php echo ($n["id"]); ?>" onClick="delConfirm()">删除</a>
										</td>
									</tr><?php endforeach; endif; else: echo "" ;endif; ?>
								
							</tbody>
						</table>
						<!--pagination-->
						<div class="col-md-4 col-md-offset-8 page">
							<ul class="pagination">
								<li><?php echo ($page); ?></li>
							</ul>
						</div>
					</div>
				</div>
			<script>
				function delConfirm(){
					return confirm("确定删除?");
				}
			</script>
			</div>
		</div>
	</div>
	
</body>
</html>