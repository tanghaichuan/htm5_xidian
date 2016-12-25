<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
 	<meta charset="utf-8">
 	<link rel="stylesheet" href="/html5-xidian/Public/home/css/bootstrap.min.css">
  <link rel="stylesheet" href="/html5-xidian/Public/home/css/amazeui.css"/>
  <link rel="stylesheet" media="screen and (max-width:1024px)" href="/html5-xidian/Public/home/css/medium.css" type="text/css" />
  <link rel="stylesheet" media="screen and (min-width:1025px)" href="/html5-xidian/Public/home/css/large.css" type="text/css" />
  <link rel="stylesheet" type="text/css" href="/html5-xidian/Public/home/css/heartStyle.css">
  <link rel="stylesheet" href="/html5-xidian/Public/home/css/awesomplete.css" type="text/css" />
  <script src="/html5-xidian/Public/home/js/food_templet.js"></script>  
  <link rel="stylesheet" href="/html5-xidian/Public/home/css/food_templet.css"/ >
  <script src="/html5-xidian/Public/home/js/jquery.js"></script>    
  <script src="/html5-xidian/Public/home/js/bootstrap.min.js"></script>
  <script src="/html5-xidian/Public/home/js/amazeui.min.js"></script>
  <script src="/html5-xidian/Public/home/js/homeEdit.js"></script>
  <script src="/html5-xidian/Public/home/js/register_form.js"></script>
  
   <link rel="stylesheet" href="/html5-xidian/Public/home/css/food.css"/>
</head>
<body>
<!--页头-->
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
    <!--内容-->
    <div class="content">
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
            </li>
          <li class="dropdown">
               <a href="/html5-xidian/home.php/Home/users/index.html" class="dropdown-toggle">个人中心</a>
              <ul class="dropdown-menu" style="text-align: center;min-width: 86px;">
                <li>
                   <a href="/html5-xidian/home.php/Home/users/collect.html">我的收藏</a>
                </li>
                <li>
                   <a href="/html5-xidian/home.php/Home/users/publish.html">我的发布</a>
                </li>
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
 <div class="container-fluid">
      
      <div class="row">
        <div class="col-md-12">
          <img alt="英式餐点" src="/html5-xidian/Public/home/images/food-UK-0.png" />
        </div>
      </div>
      <br / >
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-12">
              <ul class="breadcrumb">
                <li>
                  <a href="/html5-xidian/home.php/Home/index/index.html">首页</a> 
                </li>
                <li>
                  <a href="/html5-xidian/home.php/Home/french/french_cate.html">美食鉴赏</a> 
                </li>
                <li class="active">
                  英式餐点
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
          <div class="col-sm-12">
            <div class="col-sm-3">
              <span class="font-a">英式餐点</span>
            </div>
            <div class="col-sm-9">
              <p class="font-b">不同于欧陆早餐面包加咖啡的简单搭配，英式早餐以菜点丰富著名。需要说明的是标准英式早餐中这么多种类的食品不是供客人选用其中几样，而是全都放在大餐盘里让客人大朵快颐。</p>
            </div>
          </div>
          <div class="row-a">
            <?php if(is_array($food)): $i = 0; $__LIST__ = $food;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$n): $mod = ($i % 2 );++$i;?><div class="col-md-3 col-sm-4 col-xs-5" style="height: 300px;" id="margin">
                <div class="thumbnail" id="thumbnail">
                  <figure class="templet ">

                      <img src="/html5-xidian/Public/<?php echo ($n["img"]); ?>" id="food-thumb"  />
                      <figcaption>
                          <h3><?php echo ($n["name"]); ?></h3>
                          <p><?php echo (mb_substr($n["content"],0,22,'utf-8')); ?>...</p>
                      </figcaption>

                      <a href="/html5-xidian/home.php/Home/food/content/id/<?php echo ($n["id"]); ?>"></a>
                  </figure>
                  <br/> <br/> <br/>
                  <div  class="name">
                    <div style="padding: 4px 0px 0px 2px;border-bottom: 1px dotted #C0C0C0;">
                      <?php echo ($n["name"]); ?>
                    </div>  
                    <div class="food-info">
                      <div class="heart" id="like1" rel="like" title="收藏" name="<?php echo ($n["id"]); ?>" value="<?php echo ($username); ?>"></div>
                    </div>
                  </div>
                  <div class="stuff">
                    <p>[<?php echo (mb_substr($n["ingredients"],0,30,'utf-8')); ?>]</p><!-- 材料 -->
                  </div>
                  <div class="user-info">
                    <img src="/html5-xidian/Public/home/images/avater.jpeg" alt="" class="col-sm-3 " />
                    <div class="actor">
                      <p><a href="#"><?php echo ($n["publish_name"]); ?></a></p>
                      <span class="col-sm-7" id="time"><font>&nbsp;发布于</font><font>&nbsp;<?php echo ($n["food_public_time"]); ?></font></span>
                    </div>
                  </div> 
                </div>
              </div><?php endforeach; endif; else: echo "" ;endif; ?>  
          </div>  
        </div>
      </div>  
    
    	<br/><br/>
    	<div class="row">
    		<div class="col-md-8">
    		</div>
    		<div class="col-md-4">
    			<ul class="pagination">
    			</ul>
    		</div>
    	</div>
    	<br/>
    	<div class="row">
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
      </div>
    </div>
  </div>
<script src="/html5-xidian/Public/home/js/heart.js"></script>
</body>
</html>