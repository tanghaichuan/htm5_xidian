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
      </nav>
    </div>
    <div class="container-fluid">
      
      <div class="row">
        <div class="col-md-12">
          <img alt="俄式餐点" src="/html5-xidian/Public/home/images/food-R-0.png" class=""/>
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
        <div class="col-md-1 col-sm-1 col-xs-1">
          <!-- 文字实现竖排 -->
          <div class="font-a">俄式餐点</div>
        </div>
        <div class="col-md-11">
          <div class="row" style="height: 70px;">
            <p>
              <div class="font-b">俄罗斯人比较讲究饮食，菜肴的品种丰富多彩，"俄式大餐"在世界很有名气，珍贵的鱼子酱，正宗的罗宋汤，还有传统小煎饼，都是非常有民族特色的。</div>
            </p>
          </div><!-- 下方为图片列表内容   -->
            <!-- 第一行图片 -->
          <div class="row-a">
            <?php if(is_array($food)): $i = 0; $__LIST__ = $food;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$n): $mod = ($i % 2 );++$i;?><div class="col-md-3 col-sm-4 col-xs-5" style="height: 300px;">
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
                  <p>&nbsp;&nbsp;<?php echo ($n["name"]); ?></p>
                  <br/>
                  <div class="user-info">
                    <img src="/html5-xidian/Public/home/images/avater.jpeg" alt="" class="col-sm-3 img-circle" />
                    <p>by&nbsp;&nbsp;<?php echo ($n["publish_name"]); ?></p>
                    <span class="col-sm-7">&nbsp;&nbsp;&nbsp;发布于&nbsp;&nbsp;<?php echo ($n["food_public_time"]); ?></span>
                  </div> 
                </div>
                <div class="food-info">
                  <div class="heart" id="like1" rel="like" title="收藏" name="<?php echo ($n["id"]); ?>" value="<?php echo ($username); ?>"></div>
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

</body>
</html>