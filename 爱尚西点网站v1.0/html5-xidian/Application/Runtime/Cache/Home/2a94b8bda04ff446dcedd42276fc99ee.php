<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <title>首页</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <meta charset="utf-8">
    <link rel="stylesheet" href="/html5-xidian/Public/home/css/bootstrap.min.css">
    <link rel="stylesheet" href="/html5-xidian/Public/home/css/animation.css">
    <link rel="stylesheet" media="screen and (max-width:1024px)" href="/html5-xidian/Public/home/css/medium.css" type="text/css" />
    <link rel="stylesheet" media="screen and (min-width:1025px)" href="/html5-xidian/Public/home/css/large.css" type="text/css" />
    <link rel="stylesheet" href="/html5-xidian/Public/home/css/awesomplete.css" type="text/css" />
    <script src="/html5-xidian/Public/home/js/jquery.js"></script>    
    <script src="/html5-xidian/Public/home/js/bootstrap.min.js"></script>
    <script src="/html5-xidian/Public/home/js/homeEdit.js"></script>
    <script src="/html5-xidian/Public/home/js/animation.js"></script>
    <style>
      a,a:link,a:visited,a:hover{text-decoration:none;font-size:14px;}
    </style>
  </head>
  <body>
  <!--页头-->
  <div class="header" style="height: 50px;overflow: hidden;">
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="background-color: white;overflow: hidden;">
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
               <a href="/html5-xidian/home.php/Home/users/collect.html" class="dropdown-toggle">个人中心</a>
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

      <!--幻灯片-->
      <div style="padding: 9px;">
        <div class="carousel slide" id="carousel-188560">
          <ol class="carousel-indicators">
            <li class="active" data-slide-to="0" data-target="#carousel-188560">
            </li>
            <li data-slide-to="1" data-target="#carousel-188560">
            </li>
            <li data-slide-to="2" data-target="#carousel-188560">
            </li>
          </ol>
          <div class="carousel-inner">
            <div class="item active"
            >
              <img alt="" src="/html5-xidian/Public/<?php echo ($lists[0]["img"]); ?>"/>
            </div>
            <div class="item">
              <img alt="" src="/html5-xidian/Public/<?php echo ($lists[1]["img"]); ?>"/>
            </div>
            <div class="item">
              <img alt="" src="/html5-xidian/Public/<?php echo ($lists[2]["img"]); ?>"/>
            </div>
          </div> <a class="left carousel-control" href="#carousel-188560" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" style="overflow: hidden;"></span></a> <a class="right carousel-control" href="#carousel-188560" data-slide="next"><span class="glyphicon glyphicon-chevron-right" style="overflow: hidden;"></span></a>
        </div>
      </div>

      <!--各式餐点-->
      <div class="row clearfix" style="padding: 0px 25px;">
        <div class="col-md-3 column" style="padding: 0px;">
          <a href="/html5-xidian/home.php/Home/food/french_cate.html"><img src="/html5-xidian/Public/home/images/home_pic6.jpg" id="animatorfrench" class="animationfrench"></a>
          <a href="#"><img src="/html5-xidian/Public/home/images/wbg2.png" class="wbg2"></a>
          <span id="italy_introduce">
            <h3 style="overflow: hidden;">意氏西餐</h3>
            &nbsp;&nbsp;有人问西餐之母是哪国菜？大部分人会说是法国菜，现在郑重地告诉大家，西餐之母是意大利菜！源远流长的意大利餐，对欧美国家的餐饮产生了深厚影响，并发展出多种派系，故有“西餐之母”之美称。
          </span> 
        </div>
        <div class="col-md-3 column" style="padding: 0px;">
          <a href="#"><img src="/html5-xidian/Public/home/images/wbg1.png" class="wbg1"></a>
          <span id="french_introduce">
            <h3 style="overflow: hidden;">法氏西餐</h3>
            &nbsp;&nbsp;法国不仅是浪漫之国,也是美食美酒的天堂。法国菜是世界上著名菜系之一，已为众所公认。它的口感之细腻、酱料之美味、餐具摆设之华美，简直可称之为一种艺术。
          </span>
          <a href="/html5-xidian/home.php/Home/food/italy_cate.html"><img src="/html5-xidian/Public/home/images/home_pic5.jpg" id="animatoritaly" class="animationitaly"></a>
        </div>
        <div class="col-md-6 column" style="padding: 0px;">
          <a href="#"><img src="/html5-xidian/Public/home/images/home_pic3.jpg"></a>
        </div>
      </div>
      <div class="row clearfix" style="padding: 0px 25px;">
        <div class="col-md-6 column" style="padding: 0px;">
          <a href="#"><img src="/html5-xidian/Public/home/images/home_pic2.jpg"></a>
        </div>
        <div class="col-md-3 column" style="padding: 0px;">
          <a href="/html5-xidian/home.php/Home/food/uk_cate.html"><img src="/html5-xidian/Public/home/images/home_pic4.jpg" id="animatoruk" class="animationuk"></a>
          <a href="#"><img src="/html5-xidian/Public/home/images/wbg2.png" class="wbg2"></a>
          <span id="russian_introduce">
            <h3 style="overflow: hidden;">俄氏西餐</h3>
            &nbsp;&nbsp;俄罗斯菜肴特点为选料广泛、讲究制作、加工精细、因料施技、讲究色泽、味道多样、适应性强、油大、味重。由于其特殊的地理环境、人文环境以及独特的历史发展进程，从而造就了独具特色的俄罗斯饮食文化。
          </span>
        </div>
        <div class="col-md-3 column" style="padding: 0px;">
          <a href="#"><img src="/html5-xidian/Public/home/images/wbg1.png" class="wbg1"></a>
            <span id="uk_introduce">
            <h3 style="overflow: hidden;">英氏西餐</h3>
            &nbsp;&nbsp;英国菜可以用一个词来形容——“Simple”（简单）。吃英国菜就是在恋爱,味道与爱情,都是自己选择的。并非是用舌头来评判味道,而是用心。英国菜的烹调对原料的取舍不多，尽量保持菜式的原汁原味。
          </span>
          <a href="/html5-xidian/home.php/Home/food/russian_cate.html"><img src="/html5-xidian/Public/home/images/home_pic1.jpg" id="animatorrussion" class="animationrussion"></a>
        </div>
      </div>
    </div>

  <!--页脚-->
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
  </body>
</html>