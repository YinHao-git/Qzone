<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>
    <!-- Bootstrap -->
    <link href="/qzone15/Public/home/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/qzone15/Public/home/my.css" rel="stylesheet" type="text/css" media="screen" />
    <!-- <link href="./dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- <link href="./dist/css/my.css" rel="stylesheet"> -->
    <style>
      ul li{float:left;font-size: 12px;}
      .link{
          width:1000px;

          
          /*margin:auto 0;*/
          margin-top: 600px;

          text-align: center;
          
        }
        .link li a{
          color:white;
          font-size: 13px;
        }
        p{
          color:white;
        }
    </style>
  </head>
  <body style="background:url('/qzone15/Public/home/dis/images/1.jpg');">
    <div class="col-md-3" style="left:800px;top:150px;width:350px;height:300px;background:white;border-radius:5px;z-index:10;">
      <p class="h3" style="text-align:center;">账号密码登录</p>
      <form class="form-horizontal " role="form"  action="<?php echo U('Login/login');?>" method="post">
        <div class="form-group" style="margin-top:20px;">
          <!-- <label for="inputEmail3" class="col-sm-2 control-label">Email</label> -->
          <div class="col-sm-12">
            <input type="trxt" name="phone" class="form-control" id="inputPhone3" placeholder="输入手机号">
          </div>
        </div>
        <div class="form-group">
          <!-- <label for="inputPassword3" class="col-sm-2 control-label">Password</label> -->
          <div class="col-sm-12">
            <input type="password" name="pwd" class="form-control" id="inputPassword3" placeholder="输入密码">
          </div>
        </div>
        <div class="form-group">
          <div class=" col-sm-12">
            <div class="checkbox">
              <label><input type="checkbox"> 记住密码</label>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <!-- <button type="submit" class="btn btn-default" style="width:250px;height:30px;background:lightgreen;">登录</button> -->
            <input type="submit" class="btn btn-success" value="登&nbsp;&nbsp;录" style="width:320px">
          </div>
        </div>
        <ul style="list-style:none">
          <li><a href="">忘了密码?&nbsp;|&nbsp;</a></li>
          <li><a href="../Register/index.html">注册新账号&nbsp;|&nbsp;</a></li>
          <li><a href="">意见反馈</a></li>
        </ul>
      </form>
    </div>
    
    
    <!-- <center> -->
      <div class="col-md-6">
    <ul class="link">
      <?php if(is_array($llinklist)): foreach($llinklist as $key=>$vo): ?><li><a href="<?php echo ($vo["linkaddress"]); ?>"><?php echo ($vo["linkname"]); ?>&nbsp;&nbsp;|&nbsp;&nbsp;</a></li><?php endforeach; endif; ?>
      <br>
      <center><p>Copyright © 2005 - 2016 Tencent.</p>
      <p>作品来自ykz 原创馆</p></center>
    </ul>
    </div>
  <!-- </center> -->
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/qzone15/Public/home/js/jquery.min.js"></script>
    <script src="/qzone15/Public/home/js/holder.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/qzone15/Public/home/js/bootstrap.min.js"></script>
  </body>
</html>