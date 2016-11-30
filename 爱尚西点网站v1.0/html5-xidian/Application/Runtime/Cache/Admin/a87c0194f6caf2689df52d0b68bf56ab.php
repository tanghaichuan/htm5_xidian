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
					<li><a href="/html5-xidian/index.php/Admin/login/index.html">欢迎：<?php echo ($username); ?></a></li>
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
							 <a href="/html5-xidian/index.php/Admin/food/index.html">美食管理</a>
						</li>
						<li>
							 <a href="#">添加美食</a>
						</li>
					</ul>
				</div>
				<!--userList-->
				<div class="col-md-12 userList">
					<div class="col-md-12">
						<h4>添加美食</h4>
					</div>
					<!--shop-->
					<div class="col-md-12">
						<form class="form-horizontal" role="form" action="<?php echo U('Admin/food/store');?>" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label for="inputFoodClassify" class="col-md-3 control-label" style="width: 120px;">选择商品类型：</label>
								<div class="col-md-5">
									<label for="" class="shopRadio"><input type="radio" id="inputFoodClassify" value="法式菜肴" name="classify" />法式菜肴</label>
									<label for="" class="shopRadio"><input type="radio" id="inputFoodClassify" value="意式菜肴" name="classify" />意式菜肴</label>
									<label for="" class="shopRadio"><input type="radio" id="inputFoodClassify" value="美式菜肴" name="classify" />美式菜肴</label>
									<label for="" class="shopRadio"><input type="radio" id="inputFoodClassify" value="英式菜肴" name="classify" />英式菜肴</label>
									<label for="" class="shopRadio"><input type="radio" id="inputFoodClassify" value="俄式菜肴" name="classify" />俄式菜肴</label>
								</div>
							</div>
							<div class="form-group">
								 <label for="inputFoodTag" class="col-md-2 control-label">标签：</label>
								<div class="col-md-3">
									<select class="form-control" id="inputFoodTag" name="tagname">
									  <?php if(is_array($tagList)): $i = 0; $__LIST__ = $tagList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$n): $mod = ($i % 2 );++$i;?><option><?php echo ($n["tagname"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
									</select>
								</div>
							</div>
							<div class="form-group">
								 <label for="inputFoodName" class="col-sm-2 control-label">名称：</label>
								<div class="col-sm-3">
									<input type="text" class="form-control" id="inputFoodName" name="name" />
								</div>
							</div>
							<div class="form-group">
								 <label for="inputFoodMeta" class="col-sm-2 control-label">材料：</label>
								<div class="col-sm-3">
									<textarea class="form-control" id="inputFoodMeta" rows="3" name="ingredients"></textarea>
								</div>
							</div>
							<div class="form-group">
								 <label for="inputFoodStep" class="col-sm-2 control-label">步骤：</label>
								<div class="col-sm-3">
									<textarea class="form-control" id="inputFoodStep" rows="3" name="practice"></textarea>
								</div>
							</div>
							<div class="form-group">
								 <label for="inputFoodImg" class="col-sm-2 control-label">美食图片：</label>
								<div class="col-sm-3">
									<input type="file" id="inputFoodImg" class="form-control" name="img">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-3">
									 <button type="submit" id="submit" class="btn">添加</button>
								</div>
							</div>
						</form>
						
					</div>
				</div>
			
			</div>
		</div>
	</div>
	
</body>
</html>