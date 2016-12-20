<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <title>商城列表页</title>
  <link rel="stylesheet" href="/html5-xidian/Public/home/css/bootstrap.min.css">
  <link rel="stylesheet" media="screen and (max-width:1024px)" href="/html5-xidian/Public/home/css/medium.css" type="text/css" />
  <link rel="stylesheet" media="screen and (min-width:1025px)" href="/html5-xidian/Public/home/css/large.css" type="text/css" />
  <script src="/html5-xidian/Public/home/js/jquery.js"></script>    
  <script src="/html5-xidian/Public/home/js/bootstrap.min.js"></script>
  <script src="/html5-xidian/Public/home/js/homeEdit.js"></script>
</head>
<body>
  <div class="header" style="height: 50px;">
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="background-color: white;">
      <div class="navbar-header">
         <a href="#"><img src="/html5-xidian/Public/home/images/logo1.png"></a>
      </div>
      
      <div class="collapse navbar-collapse" >
        <ul class="nav navbar-nav navbar-left" style="position: absolute;left: 40px;top: -10px;">
          <li>
             <a href="#"><img src="/html5-xidian/Public/home/images/logo2.png"></a>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right" >
          <?php if(!empty($username)): ?><li>
                <a href="/html5-xidian/home.php/Home/login/index.html" style="padding: 15px 10px 15px 0px;" id="isLogin">欢迎：<?php echo ($username); ?></a>
              </li>
              <li>
                <a href="/html5-xidian/home.php/Home/login/quit" style="padding: 15px 50px 15px 0px;">退出</a>
              </li>
            <?php else: ?> 
              <li>
                <a href="/html5-xidian/home.php/Home/login/index.html" style="padding: 15px 10px 15px 0px;" id="isLogin">登录</a>
              </li>
              <li>
                <a href="/html5-xidian/home.php/Home/login/register.html" style="padding: 15px 50px 15px 0px;">注册</a>
              </li><?php endif; ?>
        </ul>
      </div>
    </nav>
  </div>

  <!--背景-->
  <div style="background-image: url(/html5-xidian/Public/home/images/bg.png);">
    <!--导航栏-->
      <nav class="navbar navbar-default navbar-static-top" role="navigation" style="background-image: url(/html5-xidian/Public/home/images/bg.png);border-bottom: 1px solid #C0C0C0;">
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right" style="font-weight: bold;color: black;">
            <li class="dropdown">
               <a href="/html5-xidian/home.php/Home/index/index.html">首页</a>
            </li>
           <li class="dropdown">
               <a href="/html5-xidian/home.php/Home/food/french_cate.html" class="dropdown-toggle">美食鉴赏</a>
              <ul class="dropdown-menu" style="text-align: center;min-width: 86px;">
                <li>
                   <a href="/html5-xidian/home.php/Home/food/french_cate.html">法式菜肴</a>
                </li>
                <li>
                   <a href="/html5-xidian/home.php/Home/food/uk_cate.html">英式菜肴</a>
                </li>
                <li>
                   <a href="/html5-xidian/home.php/Home/food/us_cate.html">美式菜肴</a>
                </li>
                <li>
                   <a href="/html5-xidian/home.php/Home/food/italy_cate.html">意式菜肴</a>
                </li>
                 <li>
                   <a href="/html5-xidian/home.php/Home/food/russian_cate.html">俄式菜肴</a>
                </li>
              </ul>
            </li>
            <li class="dropdown">
               <a href="/html5-xidian/home.php/Home/publish/index.html" class="dropdown-toggle">美食DIY</a>
              <ul class="dropdown-menu" style="text-align: center;min-width: 82.68px;">       
                <li>
                   <a href="/html5-xidian/home.php/Home/publish/index.html">发布美食</a>
                </li>
              </ul>
            </li>
           	<li class="dropdown">
               <a href="/html5-xidian/home.php/Home/shop/index.html" class="dropdown-toggle">食材商城</a>
              <ul class="dropdown-menu" style="text-align: center;min-width: 86px;">
                <li>
                   <a href="/html5-xidian/home.php/Home/shop/index.html">用具</a>
                </li>
                <li>
                   <a href="/html5-xidian/home.php/Home/shop/index.html">食材</a>
                </li>
              </ul>
            </li>
          	<li class="dropdown">
               <a href="/html5-xidian/home.php/Home/users/index.html" class="dropdown-toggle">个人中心</a>
              <ul class="dropdown-menu" style="text-align: center;min-width: 86px;">
                <li>
                   <a href="/html5-xidian/home.php/Home/users/reset_information.html">修改信息</a>
                </li>
              
                <li>
                   <a href="/html5-xidian/home.php/Home/users/reset_password.html">修改密码</a>
                </li>
                 <li>
                   <a href="/html5-xidian/home.php/Home/cart/index.html">购物车</a>
                </li>
              </ul>
            </li>
            <li class="dropdown">
               <a href="#" class="dropdown-toggle">关于我们</a>
            </li>
            <li>
              <form class="navbar-form navbar-left" role="search" action="<?php echo U('Home/index/content');?>" method="post">
                <input class="awesomplete" placeholder="搜索想要的美食..." id="searchFood" name="data" style="position: relative;top: 3px;" />             
                <button type="submit" class="btn btn-default btn-sm" style="position: relative;top: 1.5px;">搜索</button>
                <ul class="mylist">
                </ul> 
              </form>
            </li>
          </ul>
        </div>
      </nav>
    </div>

  <!--面包屑-->
  <div class="row-fluid">
    <div class="col-md-12">
      <ul class="breadcrumb">
        <li>
          <a href="/html5-xidian/home.php/Home/index/index.html">首页</a> 
        </li>
        <li class="active">
          食材商城
        </li>
      </ul>
    </div>
  </div>

  <!--商城内容-->
  <div id="shopping_list">
  	<div class="row clearfix">
		<div class="col-md-12 column">
			<div class="row">
        <?php if(is_array($goods)): $i = 0; $__LIST__ = $goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$n): $mod = ($i % 2 );++$i;?><div class="col-md-3">
            <div class="thumbnail">
              <a href="content/id/<?php echo ($n["id"]); ?>"><img class="shopping_pic" src="/html5-xidian/Public/<?php echo ($n["img"]); ?>" /></a>
              <div class="caption">
                <a href="#"><p style="padding: 0px 8px" title="<?php echo ($n["name"]); ?>"><?php echo (mb_substr($n["name"],0,20,utf8)); ?>...</p></a>
                <div><b class="price">￥<?php echo ($n["price"]); ?></b></div>
                <a class="btn"  style="color: #fff" id="cart" name="<?php echo ($username); ?>" value="<?php echo ($n["id"]); ?>">加入购物车</a>
                <div class="count">
                  <p style="display: inline;">月售：100件</p><p style="display: inline;float: right;">包邮</p> 
                </div>
              </div>
            </div>
          </div><?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
		</div>
	</div>
  </div>
  <!--
    <div class="clearfix">
        <?php if(is_array($goods)): $i = 0; $__LIST__ = $goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$n): $mod = ($i % 2 );++$i;?><div>
                <div>
                    <a href="/html5-xidian/home.php/Home/shop/content/id/<?php echo ($n["id"]); ?>" target="_blank">
                        <img alt="<?php echo ($n["name"]); ?>" src="/html5-xidian/Public/<?php echo ($n["img"]); ?>">
                    </a>       
                </div>
                <div>
                    <a href="/html5-xidian/home.php/Home/shop/content/id/<?php echo ($n["id"]); ?>" target="_blank" title="<?php echo ($n["name"]); ?>">
                        <h3><?php echo ($n["name"]); ?></h3>
                    </a>
                    <div>
                        <span>￥<?php echo ($n["price"]); ?></span>                   
                    </div>
                </div>
                <div>月售 1288 件</div>
                <div>包邮</div>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
   -->
   <!--分页-->
  <div class="container" >
    <div class="row-fluid">
        <div align="right">
            <ul class="pagination">
                
            </ul>
        </div>
    </div>
  </div>
  <div class="footer">
    <div class="row clearfix" id="footer_padding">
      <div class="col-md-3 column" id="qrc">
        <a href="#"><img src="/html5-xidian/Public/home/images/qrc.jpg"></a>
      </div>
      <div class="col-md-5 column" id="footer_introduce">
        <p>爱尚美食，西餐美食菜谱分享网站。每天都有新分享，拥有最实用的美食、菜谱、食谱的做法，同是还有聚餐百万美食爱好者的美食家社区，欢迎加入！</p>
      </div>
      <div class="col-md-4 column" id="footer_contact">
        <p>联系方式：15800000000</br>邮箱：aishangxidian@163.com</br>地址：河北省石家庄市裕华区南二环东路20号</br></p>
      </div>
    </div>
  </div>
<!--<div class="ajifenshow"><a class="yshfootbg" href="/mall/contact" target="_blank"></a></div> -->
</body>
</html>