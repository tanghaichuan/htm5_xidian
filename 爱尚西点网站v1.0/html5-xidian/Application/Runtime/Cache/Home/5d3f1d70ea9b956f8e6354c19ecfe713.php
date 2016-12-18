<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title></title>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta charset="utf-8">
<link rel="stylesheet" media="screen and (max-width:1024px)" href="/html5-xidian/Public/home/css/medium.css" type="text/css" />
<link rel="stylesheet" media="screen and (min-width:1025px)" href="/html5-xidian/Public/home/css/large.css" type="text/css" />
<link rel="stylesheet" href="/html5-xidian/Public/home/css/bootstrap.min.css">
<link rel="stylesheet" media="screen and (max-width:1024px)" href="/html5-xidian/Public/home/css/food_content_medium.css" type="text/css" />
<link rel="stylesheet" media="screen and (min-width:1025px)" href="/html5-xidian/Public/home/css/food_content_large.css" type="text/css" />
<link rel="stylesheet" href="/html5-xidian/Public/home/css/amazeui.css"/>
<link rel="stylesheet" href="/html5-xidian/Public/home/css/food_list_cartoon.css">
<script src="/html5-xidian/Public/home/js/jquery.js"></script>    
<script src="/html5-xidian/Public/home/js/bootstrap.min.js"></script>
<script src="/html5-xidian/Public/home/js/amazeui.min.js"></script>
<script src="/html5-xidian/Public/home/js/homeEdit.js"></script>
<script src="/html5-xidian/Public/home/js/register_form.js"></script>

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
  </div><!-- header结束 -->

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
            <form class="navbar-form navbar-left" role="search">
              <div class="form-group">
              <input type="text" class="form-control" />
              </div>
              <button type="submit" class="btn btn-default">搜索</button>
            </form>
          </li>
        </ul>
      </div>
    </nav><!-- nav结束 -->
  </div><!-- content结束 -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <ul class="breadcrumb">
          <li>
            <a href="/html5-xidian/home.php/Home/index/index.html">首页</a> 
          </li>
          <li>
            <a href="/html5-xidian/home.php/Home/food/french_cate.html">美食鉴赏</a> 
          </li>
          <li>
            <a href="/html5-xidian/home.php/Home/food/french_cate.html">法式美食</a> 
          </li>
          <li class="active">
          当前
          </li>
        </ul>
      </div>
    </div>
    <!-- 美食图片 -->
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-4">
          <img alt="Bootstrap Image Preview" src="/html5-xidian/Public/<?php echo ($content["img"]); ?>" class="foodlist" id="foodlist"/>
        </div>
        <!-- 制作步骤 -->
        <div class="col-md-7">
          <div class="font-a" name="<?php echo ($content["id"]); ?>">
          <?php echo ($content["name"]); ?>
          </div>
          <div>
            <a href="#">
              <span class="badge badge-warning">甜品</span>
            </a>
            <a href="">
              <span class="label label-warning">加入收藏</span>
            </a>
          </div>
          <div class="row">
            <div class="col-md-3">
              <div class="font-b">
              美食介绍：
              </div>
            </div>
            <div class="col-md-9">
              <div class="font-c">
              <?php echo ($content["ingredients"]); echo ($content["practice"]); ?>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <div class="font-b">
              菜品食材：
              </div>
            </div>
            <div class="col-md-9">
              <div class="font-c">
              <?php echo ($content["ingredients"]); ?>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <div class="font-b">
              操作步骤：
              </div>
            </div>
            <div class="col-md-9">
              <div class="font-c">
              <?php echo ($content["practice"]); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    <br/><br/><br/> 

    <div class="border-a">
      <font style="position: relative;top: -10px;font-family:仿宋;color: black;" >你可能需要：</font>
    </div>
    <div class="row clearfix">
      <div class="col-md-12 column">
          <div id="myCarousel" class="carousel slide pad_010 b_k" data-ride="carousel">
          <!-- 轮播（Carousel）指标 -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>   
            <!-- 轮播（Carousel）项目 -->
            <div class="carousel-inner bor_btm">
              <div class="item active" >
                  <div>
                      <div class="col-md-1"></div>
                      <div class="col-md-2"> <img src="/html5-xidian/Public/home/images/food-UK-1.png" ></div>
                      <div class="col-md-2"><img src="/html5-xidian/Public/home/images/food-UK-2.png" ></div>
                      <div class="col-md-2"><img src="/html5-xidian/Public/home/images/food-UK-3.png" ></div>
                      <div class="col-md-2"><img src="/html5-xidian/Public/home/images/food-UK-4.png" ></div>
                      <div class="col-md-2"><img src="/html5-xidian/Public/home/images/food-UK-5.png" ></div>
                      <div class="col-md-1"></div>
                  </div>
              </div>
              <div class="item">
                  <div style="padding-left:18px">
                      <div class="col-md-1"></div>
                      <div class="col-md-2"> <img src="/html5-xidian/Public/home/images/food-UK-1.png" ></div>
                      <div class="col-md-2"><img src="/html5-xidian/Public/home/images/food-UK-2.png" ></div>
                      <div class="col-md-2"><img src="/html5-xidian/Public/home/images/food-UK-3.png" ></div>
                      <div class="col-md-2"><img src="/html5-xidian/Public/home/images/food-UK-4.png" ></div>
                      <div class="col-md-2"><img src="/html5-xidian/Public/home/images/food-UK-5.png" ></div>
                      <div class="col-md-1"></div>
                  </div>
              </div>
              <div class="item">
                  <div style="padding-left:18px">
                      <div class="col-md-1"></div>
                      <div class="col-md-2"> <img src="/html5-xidian/Public/home/images/food-UK-1.png" ></div>
                      <div class="col-md-2"><img src="/html5-xidian/Public/home/images/food-UK-2.png" ></div>
                      <div class="col-md-2"><img src="/html5-xidian/Public/home/images/food-UK-3.png" ></div>
                      <div class="col-md-2"><img src="/html5-xidian/Public/home/images/food-UK-4.png" ></div>
                      <div class="col-md-2"><img src="/html5-xidian/Public/home/images/food-UK-5.png" ></div>
                      <div class="col-md-1"></div>
                  </div>
              </div>
            </div>
            <!-- 轮播（Carousel）导航 -->
            <a class="carousel-control left" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" style="overflow: hidden;"></span></a>
            <a class="carousel-control right" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right" style="overflow: hidden;"></span></a>      
        </div>
      </div><!-- col-md-12 column -->
    </div><!-- row clearfix -->

     
    <br/><br/><br/><br/>
      <div class="container">
        <div class="row">
        <!--评论框-->
        <div class="col-md-11 col-s-10 col-xs-10">
          
          <form action="<?php echo U('Home/food/addcomment');?>" method="post" role="form" class="form-horizontal" id="inputComment">
            <h3><?php echo ($content["name"]); ?>的评论</h3>
            <div class="form-group">
              <div class="col-md-1" id="avater-img">
                <img src="/html5-xidian/Public/home/images/avater.jpeg" alt="" class="img-circle" width="46px" height="46px">
                <p id="commentUser"><?php echo ($username); ?></p>
              </div>
              <div class="col-md-5" id="text">
                <textarea rows="5" cols="70" maxlength="140" name="comment"></textarea>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-1 col-xs-1 col-sm-1">
                <button type="button" class="btn btn-info" id="commentBtn" name="<?php echo ($username); ?>" rel="<?php echo ($content["id"]); ?>">评论</button>
              </div>
            </div>  
          </form>
        </div>
        <!--评论列表-->
        <div class="col-md-11"> 
          <ul class="am-comment-list">

            <?php if(is_array($commentList)): $i = 0; $__LIST__ = $commentList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$n): $mod = ($i % 2 );++$i;?><li class="am-comment">
                <a href="#">
                <img src="/html5-xidian/Public/home/images/food-UK-1.png" alt="头像" class="am-comment-avatar" width="48" height="48"/>
                </a>
                <div class="am-comment-main">
                  <header class="am-comment-hd">
                  <div class="am-comment-meta">
                    <a href="#link-to-user" class="am-comment-author"><?php echo ($n["username"]); ?></a>
                    评论于 <time datetime="2016-07-27T04:54:29-07:00"><?php echo ($n["com_time"]); ?></time><a href="javascript:void(0);" class="reply" name="<?php echo ($n["username"]); ?>">回复</a>
                  </div>
                  </header>
                    <div class="am-comment-bd">
                    <?php echo ($n["comment"]); ?>
                  </div>
                </div>
              </li><?php endforeach; endif; else: echo "" ;endif; ?>
            
          </ul>
        </div><!-- col-md-11 -->
        <div class="col-md-1"></div>
        </div>
      </div>   
    </div>   <!-- container-fluid结束 -->   
    <br/><br/><br/>
    <div class="row">
      <div class="col-md-8">
      </div>
      <div class="col-md-4">
        <ul class="pagination">
          <!-- 分页 -->
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
</body>
</html>