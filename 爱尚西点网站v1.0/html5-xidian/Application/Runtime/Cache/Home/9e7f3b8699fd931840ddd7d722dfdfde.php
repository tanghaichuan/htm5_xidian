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
   <link rel="stylesheet" href="/html5-xidian/Public/home/css/awesomplete.css" type="text/css" />
<link rel="stylesheet" href="/html5-xidian/Public/home/css/amazeui.css"/>
<link rel="stylesheet" href="/html5-xidian/Public/home/css/food_list_cartoon.css">
<script src="/html5-xidian/Public/home/js/jquery.js"></script>    
<script src="/html5-xidian/Public/home/js/bootstrap.min.js"></script>
<script src="/html5-xidian/Public/home/js/amazeui.min.js"></script>
<script src="/html5-xidian/Public/home/js/homeEdit.js"></script>
<script src="/html5-xidian/Public/home/js/register_form.js"></script>
<link rel="stylesheet" href="/html5-xidian/Public/home/css/idangerous.swiper.css">
<link rel="stylesheet" href="/html5-xidian/Public/home/css/style.css">
<script src="/html5-xidian/Public/home/js/idangerous.swiper.min.js"></script>
</head>
<style type="text/css">
  @media screen and (min-width:1025px) {
  #panda-show {
  font: 12px/1.5 "STHeiti","Microsoft YaHei","Helvetica Neue","Helvetica","SimSun","STSong","Arial","sans-serif";
  background: url(../images/bg.jpg) no-repeat center top;
  background-size: 100% auto;
  margin: 0px 110px;
  }
}
</style>
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
              <?php if(is_array($tagList)): $i = 0; $__LIST__ = $tagList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$n): $mod = ($i % 2 );++$i;?><span class="badge badge-warning"><?php echo ($n["tag_name"]); ?></span><?php endforeach; endif; else: echo "" ;endif; ?>
            <a href="javascript:void(0)" id="addFav" name="<?php echo ($content["id"]); ?>" value="<?php echo ($username); ?>" style="position: relative;top: -15px;left: 30px;">加入收藏</a>
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

    <div id="panda-show">
  <div class="full">
    <div class="content">
      <a class="arrow-left" href="#"></a>
      <a class="arrow-right" href="#"></a>
      <div class="cover-left"></div>
      <div class="swiper-container">
        <div class="swiper-wrapper">
          
          <?php if(is_array($goods)): $i = 0; $__LIST__ = $goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$n): $mod = ($i % 2 );++$i;?><div class="swiper-slide">
              <a href="<?php echo U('Home/shop/content',array('id'=>$n['id']));?>" target="_blank">
                <img src="/html5-xidian/Public/<?php echo ($n["img"]); ?>"/>
                <div class="shuffer-line"></div>
                <div class="stars-info">
                    <div class="name"><?php echo ($n["name"]); ?></div>
                    <div class="intro"><?php echo ($n["content"]); ?></div>
                    <div class="icon-shuffer-live"></div>
                </div>
              </a>            
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
                  
        </div>
      </div>
            <div class="cover-right"></div>
    </div>
  </div>
</div>
<script type="text/javascript">
    slidesPerView=4
  slidesPerGroup=4
if(document.body.clientWidth>1400){
  slidesPerView=5
  slidesPerGroup=5
}

  var mySwiper = new Swiper('.swiper-container',{
    loop: true,
    speed:1000,
  onlyExternal : true,
  slidesPerView :  slidesPerView,
  slidesPerGroup : slidesPerGroup,
  loopedSlides :20,
  loopAdditionalSlides : 20,
  onSlideChangeEnd: function(swiper){
  //alert(swiper.activeIndex);
    if(swiper.activeIndex==40){
      swiper.swipeTo(0,0)
      }
    },

  });  
  $('.arrow-left').on('click', function(e){
    e.preventDefault()
    mySwiper.swipePrev()
  })
  $('.arrow-right').on('click', function(e){
    e.preventDefault()
    mySwiper.swipeNext()
  })

  
  
window.onresize=function() {
//  alert(document.body.clientWidth );
  
  if(document.body.clientWidth<1400){
    mySwiper.params.slidesPerView=mySwiper.params.slidesPerGroup=4;
    mySwiper.reInit();
    mySwiper.swipeTo(0,0)
    }else if(document.body.clientWidth<1660){
      mySwiper.params.slidesPerView=mySwiper.params.slidesPerGroup=5;
      mySwiper.reInit();
      mySwiper.swipeTo(0,0)
    }else{
      mySwiper.params.slidesPerView=mySwiper.params.slidesPerGroup=5;
      mySwiper.reInit();
      mySwiper.swipeTo(0,0)
      }
  

}
  
</script>

    <br/><br/><br/><br/>
      <div class="container">
        <div class="row" id="pd">
        <!--评论框-->
        <div class="col-md-12">
          
          <form action="<?php echo U('Home/food/addcomment');?>" method="post" role="form" class="form-horizontal" id="inputComment">
            <h3 id="fd_name"><?php echo ($content["name"]); ?>的评论</h3>
            <div class="form-group">
              <div class="col-md-1" id="avater-img">
                <img src="/html5-xidian/Public/home/images/avater.jpeg" alt="" class="img-circle" width="46px" height="46px">
                <p id="commentUser"><?php echo ($username); ?></p>
              </div>
              <div class="col-md-6" id="text">
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

            <?php if(is_array($commentList)): $i = 0; $__LIST__ = $commentList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$n): $mod = ($i % 2 );++$i;?><li class="am-comment" style="padding-bottom: 2px;">
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