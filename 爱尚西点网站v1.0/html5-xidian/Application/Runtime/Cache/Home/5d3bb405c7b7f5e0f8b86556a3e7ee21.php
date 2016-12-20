<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <title>美食DIY</title>    
  <link href="/html5-xidian/Public/home/css/DIY.css" charset="UTF-8" rel="stylesheet" type="text/css" media="screen">
  <link rel="stylesheet" href="/html5-xidian/Public/home/css/bootstrap.min.css">
  <link rel="stylesheet" media="screen and (max-width:1024px)" href="/html5-xidian/Public/home/css/medium.css" type="text/css" />
  <link rel="stylesheet" media="screen and (min-width:1025px)" href="/html5-xidian/Public/home/css/large.css" type="text/css" />
  <link rel="stylesheet" href="/html5-xidian/Public/home/css/awesomplete.css" type="text/css" />
  <link rel="stylesheet" href="/html5-xidian/Public/admin/css/jq22.css">
  <script src="/html5-xidian/Public/home/js/jquery.js"></script>    
  <script src="/html5-xidian/Public/home/js/bootstrap.min.js"></script>
  <script src="/html5-xidian/Public/home/js/homeEdit.js"></script>
  <script src="/html5-xidian/Public/admin/js/adminAjax.js"></script>
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
      <div class="span4">
        <ul class="breadcrumb">
          <li>
            <a href="/html5-xidian/home.php/Home/index/index">首页</a> <span class="divider"></span>
          </li>
          <li class="active">
            美食DIY
          </li>
        </ul>
      </div>

      <div class="row clearfix">
        <div class="col-xs-12 col-md-12">
          <div class="col-xs-4 col-md-4">
          <image src="/html5-xidian/Public/home/images/DIY.png" style="width:100%;padding-top:80px;padding-left:100px"/>
        </div>
          <div class="col-xs-8 col-md-8" style="padding: 0px;">
          <!--shop-->
          <form class="form-horizontal" role="form" action="<?php echo U('Home/publish/publish');?>" method="post" enctype="multipart/form-data">
          	<div class="form-group">
              <label for="inputFoodClassify" class="col-xs-3 col-md-3 control-label" style="width: 120px;">选择商品类型：</label>
              <div class="col-xs-8 col-md-8">
                <label for="" class="shopRadio"><input type="radio" id="inputFoodClassify" value="法式菜肴" name="classify" />法式菜肴</label>
                <label for="" class="shopRadio"><input type="radio" id="inputFoodClassify" value="意式菜肴" name="classify" />意式菜肴</label>
                <label for="" class="shopRadio"><input type="radio" id="inputFoodClassify" value="美式菜肴" name="classify" />美式菜肴</label>
                <label for="" class="shopRadio"><input type="radio" id="inputFoodClassify" value="英式菜肴" name="classify" />英式菜肴</label>
                <label for="" class="shopRadio"><input type="radio" id="inputFoodClassify" value="俄式菜肴" name="classify" />俄式菜肴</label>
              </div>
            </div>
            <div class="form-group">
                 <label for="inputFoodTag" class="col-xs-2 col-md-2 control-label">标签：</label>
                <div class="col-xs-6 col-md-6">
                  <input type="text" name="tags" id="postTag" style="display: none;">
                  <!--标签-->
                  <div id="mycard-plus">
                    <div class="default-tag tagbtn">
                      <div class="clearfix">
                        <?php if(is_array($tagList)): $i = 0; $__LIST__ = $tagList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$n): $mod = ($i % 2 );++$i;?><a value="-1" title="选择一个标签" href="javascript:void(0);" class="addTag" rel="none"><span><?php echo ($n["tagname"]); ?></span><em></em></a><?php endforeach; endif; else: echo "" ;endif; ?>
                      </div>
                    </div><!--mycard-plus end-->
                  </div>  
                  <!--<select class="form-control" id="inputFoodTag" name="tagname" multiple="multiple" size="2">
                    <?php if(is_array($tagList)): $i = 0; $__LIST__ = $tagList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$n): $mod = ($i % 2 );++$i;?><option value="<?php echo ($n["tagname"]); ?>"><?php echo ($n["tagname"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                  </select>-->
                </div>
              </div>
            <div class="form-group">
              <label for="inputFoodName" class="col-xs-2 col-sm-2 control-label">名称：</label>
              <div class="col-xs-6 col-sm-6">
                <input type="text" class="form-control" id="inputFoodName" name="name" />
              </div>
            </div>
            <div class="form-group">
              <label for="inputFoodMeta" class="col-xs-2 col-sm-2 control-label">材料：</label>
                <div class="col-xs-6 col-sm-6">
                  <textarea class="form-control" id="inputFoodMeta" rows="3" name="ingredients"></textarea>
                </div>
            </div>
            <div class="form-group">
              <label for="inputFoodStep" class="col-xs-2 col-sm-2 control-label">步骤：</label>
              <div class="col-xs-6 col-sm-6">
                <textarea class="form-control" id="inputFoodStep" rows="3" name="practice"></textarea>
              </div>
            </div>
            <div class="form-group">
              <label for="inputFoodStep" class="col-xs-2 col-sm-2 control-label">相关信息：</label>
              <div class="col-xs-6 col-sm-6">
                <textarea class="form-control" id="inputFoodStep" rows="3" name="content"></textarea>
              </div>
            </div>
            <div class="form-group">
              <label for="inputFoodImg" class="col-xs-2 col-sm-2 control-label">美食图片：</label>
              <div class="col-xs-6 col-sm-6">
                <input type="file" id="inputFoodImg" class="form-control" name="img">
              </div>
            </div>
            <div class="form-group">
              <div class="col-xs-3 col-sm-3">
                <input type="submit" class="btn btn-sm" value="发布" style="position: relative;left: 100px;" rel="<?php echo ($username); ?>" id="submit" />
              </div>
            </div>
          </form>
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
    </div>
  </div
<!--<div class="ajifenshow"><a class="yshfootbg" href="/mall/contact" target="_blank"></a></div> -->
<script>
  $("#publish").click(function(){
      var username=$(this).attr("rel");
      if(!username){
        alert("请先登录!");
        return false;
      }
      else{
        return submit();
      }
  });
</script>
</body>
</html>