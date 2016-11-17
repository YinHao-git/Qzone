<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="/qzone17/Public/home/css/bootstrap.min.css" rel="stylesheet">
    <link href="/qzone17/Public/home/my.css" rel="stylesheet">
    

  </head>

  <body style="background:url('/qzone17/Public/home/dis/images/1.jpg');">
    <div class="col-md-3" style="left:700px;top:150px;style=width:250px;border:1px solid #999;background:white;">
      <form role="form" action="<?php echo U('Register/insert');?>" method="post">
        <center><h1>空间注册</h1></center>
        <input type="hidden" name="photo" value="photo">
        <div class="form-group">
          <!-- <label for="exampleInputEmail1">昵称:</label> -->
          <input type="name" name="username" class="form-control" id="exampleInputEmail1" placeholder="昵称:">
        </div>
        <div class="form-group">
          <!-- <label for="exampleInputPassword1">密码:</label> -->
          <input type="password" name="pwd" class="form-control" id="exampleInputPassword1" placeholder="密码:">
        </div>
        <div class="form-group">
          <!-- <label for="exampleInputPassword1">确认密码</label> -->
          <input type="password" name="repwd" class="form-control" id="exampleInputPassword1" placeholder="确认密码">
        </div>
        <div class="form-group">
          <!-- <label for="exampleInputPassword1">性别:</label> -->
          性别:<input type="radio" name="sex" value="0">女
          <input type="radio" name="sex" value="1">男
        </div>
        <div class="form-group">
          <!-- <label for="exampleInputPassword1">手机号码</label> -->
          <input type="text" name="phone" class="form-control" id="exampleInputPassword1" placeholder="手机号码">
        </div>
         <!-- <div class="form-group">
          <label for="exampleInputFile">File input</label>
          <input type="file" id="exampleInputFile">
          <p class="help-block">Example block-level help text here.</p>
        </div> -->
        <div class="checkbox">
          <label>
            <input type="checkbox" checked> 我已阅读并同意相关服务条款和隐私政策
          </label>
        </div>
        <!-- <button type="submit" class="btn btn-default" style="width:250px;height:30px;background:lightgreen;margin-bottom:10px;"><input type="submit" value="立即注册"></button>  -->
        <div >
        <input type="submit" class="btn btn-success" value="立即注册" style="width:325px">
      </div>
      </form>


   </div>

    <p class="col-md-6" style="color:white;margin-top:700px;">Copyright © 1998-2016 Tencent All Rights Reserved ykz 公司 版权所有</p>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/qzone17/Public/home/js/jquery.min.js"></script>
    <script src="/qzone17/Public/home/js/holder.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/qzone17/Public/home/js/bootstrap.min.js"></script>
  </body>
</html>