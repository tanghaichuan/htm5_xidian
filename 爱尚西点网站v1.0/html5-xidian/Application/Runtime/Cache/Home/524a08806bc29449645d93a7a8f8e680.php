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
      @media screen and (min-width:1025px) {
        #pt{
          padding: 110px 0px 0px 100px;
        }
      }
      @media screen and (max-width:1024px) {
        #pt{
          padding: 115px 0px 0px 35px;
        }
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
               <a href="/html5-xidian/home.php/Home/index/index"><img src="/html5-xidian/Public/home/images/logo2.png"></a>
            </li>
          </ul>
        </div>
      </nav>
    </div>

    <!--背景-->
  <div style="background-image: url(/html5-xidian/Public/home/images/bg.png);height: 660px;">
    <!--内容-->
    <div class="content" style="padding: 110px 10px;">
      <!--配图-->
      <div class="row clearfix">
        <div class="col-md-7 column" id="pt">
          <img src="/html5-xidian/Public/home/images/sinin.png">
        </div>
        <!--表单-->
        <div class="col-md-4 column">
            <div style="background-color: white;border-radius: 5px;">
              <div style="padding: 15px 20px;">
                <label style="font-size: 16px;">新用户注册</label>
                <label style="text-align: right;position: absolute;right: 40px;">已有账号，<a href="/html5-xidian/home.php/Home/login/index.html">直接登录></a></label>
              </div>
              <form class="form-horizontal" role="form" enctype="multipart/form-data" style="padding: 0px 50px 0px 20px;" method="post" action="register_add">
              <div class="form-group">
                 <label class="col-sm-3 control-label" style="padding-right: 0px">用户名:</label>
                <div class="col-sm-9" style="padding-right: 0px">
                  <input type="text" class="form-control" id="username" placeholder="请输入用户名" value="" name="username" />
                  <div id="usernameput"></div>
                </div>
              </div>
              <div class="form-group">
                 <label class="col-sm-3 control-label" style="padding-right: 0px">昵称:</label>
                <div class="col-sm-9" style="padding-right: 0px">
                  <input type="text" class="form-control" id="nickname" placeholder="请输入昵称" value="" name="realname" />
                  <div id="nicknameput"></div>
                </div>
              </div>
              <div class="form-group">
                 <label class="col-sm-3 control-label" style="padding-right: 0px">手机号:</label>
                <div class="col-sm-9" style="padding-right: 0px">
                  <input type="text" class="form-control" id="telphone" placeholder="请输入手机号" value="" name="telphone" />
                  <div id="telphoneput"></div>
                </div>
              </div>
              <div class="form-group">
                 <label class="col-sm-3 control-label" style="padding-right: 0px">密码:</label>
                <div class="col-sm-9" style="padding-right: 0px">
                  <input type="password" class="form-control" id="password" placeholder="请输入密码" value="" name="password" />
                  <div id="passwordput"></div>
                </div>
              </div>
              <div class="form-group">
                 <label class="col-sm-3 control-label" style="padding-right: 0px"></label>
                <div class="col-sm-9" style="padding-right: 0px">
                  <input type="password" class="form-control" id="repassword" placeholder="确认密码" value="" />
                </div>
                <div id="repasswordput"></div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                  <div class="checkbox" >
                     <label><input type="checkbox" /><p style="font-size: 0.8em;position: relative;top: 2px;">我已阅读并同意使用协议</p></label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9" style="padding-right: 0px">
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
  </div>
  </body>
</html>