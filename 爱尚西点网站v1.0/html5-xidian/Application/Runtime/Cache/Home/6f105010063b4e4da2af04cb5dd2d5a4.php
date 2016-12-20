<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <title>购物车</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <meta charset="utf-8">
    <link rel="stylesheet" href="/html5-xidian/Public/home/css/bootstrap.min.css">
    <link rel="stylesheet" media="screen and (max-width:1024px)" href="/html5-xidian/Public/home/css/medium.css" type="text/css" />
    <link rel="stylesheet" media="screen and (min-width:1025px)" href="/html5-xidian/Public/home/css/large.css" type="text/css" />
    <script src="/html5-xidian/Public/home/js/jquery.js"></script>    
    <script src="/html5-xidian/Public/home/js/bootstrap.min.js"></script>
    <script src="/html5-xidian/Public/home/js/homeEdit.js"></script>
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

      <!--面包屑-->
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <ul class="breadcrumb">
              <li>
                <a href="/html5-xidian/home.php/Home/index/index.html">首页</a> 
              </li>
              <li>
                <a href="/html5-xidian/home.php/Home/users/index.html">个人中心</a> 
              </li>
              <li>
                <a href="/html5-xidian/home.php/Home/cart/index.html">我的购物车</a> 
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!--购物车列表-->
      <div style="padding: 0px 20px;">
        <img src="/html5-xidian/Public/home/images/shopping_cart.jpg" id="cart_logo">
        <label style="position: absolute;top: 202px;left: 100px;">我的购物车</label>
      </div>
      <div style="border-bottom: 1px solid #C0C0C0">
        <h4>&nbsp;&nbsp;全部商品</h4>
      </div>
      <div style="margin: 20px;background-color: white;">
        <table class="table">
          <tbody>
            <?php if(is_array($goods)): $i = 0; $__LIST__ = $goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$n): $mod = ($i % 2 );++$i;?><tr>
                <td id="table_fir">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" rel="<?php echo ($n["price"]); ?>" id="check" /><img src="/html5-xidian/Public/<?php echo ($n["img"]); ?>" class="img-rounded">
                    </label>
                    <div style="display: inline;">
                      <b><?php echo ($n["name"]); ?></b>
                    </div>
                  </div>
                </td>
                <td style="position: relative;top: 22px;" class="number">
                  <input id="min" name="" type="button" value="-" />  
                  <input id="text_box" name="" type="text" value="1" style="width:30px;text-align: center;" /> 
                  <input id="add" name="" type="button" value="+" />  
                </td>
                <td><p>现价：￥<span id="price"><?php echo ($n["price"]); ?></span></p></td>
                <td><p>金额：￥<span class="sum"><?php echo ($n["price"]); ?></span></p></td>
                <td><a class="btn btn-warning" style="float: right;" id="delCart" name="<?php echo ($n["id"]); ?>">从购物车中删除</a>&nbsp;&nbsp;&nbsp;&nbsp;</td>
              </tr><?php endforeach; endif; else: echo "" ;endif; ?>
          </tbody>
        </table>
      </div>
      <div class="row clearfix" style="margin: 20px;padding: 13px 10px;background-color: white;height: 50px;">
        <div class="col-md-12 column">
          <div class="row clearfix">
            <div class="col-md-3 column">
              <label>
                <input type="checkbox" class="selectAll"/>
                <b><a href="javascript:void(0)" class="selectAll">全选</a>&nbsp;&nbsp;&nbsp;<a href="javascript:void(0)">删除</a></b>
              </label>
            </div>
            <div class="col-md-6 column">
            </div>
            <div class="col-md-3 column">
              <div id="sum_pos">
                合计：￥<span id="total">0</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              </div><button type="button" class="btn btn-primary btn-lg" id="sumbtn_pos">结算</button>
            </div>
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