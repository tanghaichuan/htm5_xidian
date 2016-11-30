<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <title>注册页</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">	
    <meta charset="utf-8">
    <link rel="stylesheet" href="/html5-xidian/Public/home/css/bootstrap.min.css">
    <script src="/html5-xidian/Public/home/js/jquery.js"></script>    
    <script src="/html5-xidian/Public/home/js/bootstrap.min.js"></script>
    <script src="/html5-xidian/Public/home/js/homeEdit.js"></script>
    <script src="/html5-xidian/Public/home/js/register_form.js"></script>
    <style type="text/css">
      *{
        font-family: "微软雅黑";
      }
    </style>
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
        </div>
      </nav>
    </div>

    <!--背景-->
  <div style="background-image: url(/html5-xidian/Public/home/images/bg.png);height: 615px;">
    <!--内容-->
    <div class="content" style="padding: 110px 10px;">
      <!--配图-->
      <div class="row clearfix">
        <div class="col-md-7 column" style="padding: 50px 0px 0px 80px;">
          <img src="/html5-xidian/Public/home/images/sinin.png">
        </div>
        <!--表单-->
        <div class="col-md-4 column">
            <div style="background-color: white;border-radius: 5px;">
              <div style="padding: 15px 20px;">
                <label style="font-size: 16px;">新用户注册</label>
                <label style="text-align: right;position: absolute;right: 40px;">已有账号，<a href="/html5-xidian/home.php/Home/login/login.html">直接登录></a></label>
              </div>
              <form class="form-horizontal" role="form" enctype="multipart/form-data" style="padding: 0px 50px 0px 20px;" method="post" action="register_add">
              <div class="form-group">
                 <label class="col-sm-3 control-label">用户名:</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="username" placeholder="请输入用户名" value="" name="username" />
                </div>
              </div>
              <div class="form-group">
                 <label class="col-sm-3 control-label">昵称:</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="nickname" placeholder="请输入昵称" value="" name="realname" />
                </div>
              </div>
              <div class="form-group">
                 <label class="col-sm-3 control-label">手机号:</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="password" placeholder="请输入手机号" value="" name="telphone" />
                </div>
              </div>
              <div class="form-group">
                 <label class="col-sm-3 control-label">密码:</label>
                <div class="col-sm-9">
                  <input type="password" class="form-control" id="password" placeholder="请输入密码" value="" name="password" />
                </div>
              </div>
              <div class="form-group">
                 <label class="col-sm-3 control-label"></label>
                <div class="col-sm-9">
                  <input type="password" class="form-control" id="repassword" placeholder="确认密码" value="" />
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                  <div class="checkbox">
                     <label><input type="checkbox" />我已阅读并同意爱尚西点使用协议</label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                   <button type="submit" class="btn btn-block btn-primary"><b>注册</b></button>
                </div>
              </div>
            </form>
            </br>
          </div>
        <div class="col-md-1 column">
        </div>
        </div>
      </div>
    </div>

    <!--页脚-->
    <div class="footer" style="border-top: 1px solid #C0C0C0;border-bottom: 1px solid #C0C0C0;text-align: center;">
      <a>Home</a> | <a>About</a> | <a>Service</a> | <a>Products</a> | <a>Contact</a>
    </nav>
  </div>
  </body>
</html>