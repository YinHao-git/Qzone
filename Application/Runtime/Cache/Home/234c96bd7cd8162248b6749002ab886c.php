<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<meta charset="utf-8">
<!--css-->
<link rel="stylesheet" href="/qzone15/Public/homepage/css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="/qzone15/Public/homepage/css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="/qzone15/Public/homepage/css/grid.css" type="text/css" media="screen">
<link rel="icon" href="/qzone15/Public/homepage/images/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="/qzone15/Public/homepage/images/favicon.ico" type="image/x-icon" />
<!-- <link href='http://fonts.googleapis.com/css?family=PT+Serif+Caption:400,400italic' rel='stylesheet' type='text/css'> -->
<link rel="stylesheet" href="/qzone15/Public/homepage/css/flexslider.css" type="text/css" media="screen">
<link rel="stylesheet" href="/qzone15/Public/my.css" type="text/css" media="screen">

<!-- Bootstrap -->
   <!--  <link href="/qzone15/Public/dist/css/bootstrap.min.css" rel="stylesheet"> -->

<!--js-->
<script type="text/javascript" src="/qzone15/Public/homepage/js/jquery-1.7.1.min.js" ></script>
<script type="text/javascript" src="/qzone15/Public/homepage/js/superfish.js"></script>
<script type="text/javascript" src="/qzone15/Public/homepage/js/jquery.flexslider-min.js"></script>

<script>	
			jQuery(window).load(function() {								
			jQuery('.flexslider').flexslider({
				animation: "fade",			
				slideshow: true,			
				slideshowSpeed: 7000,
				animationDuration: 600,
				prevText: "",
				nextText: "",
				controlNav: false		
			})					
      });
	</script>
  <style>
   body{
      background-image: url('/qzone15/Public/home/dis/images/11.jpg');
    }

  </style>
</head>

<body>

<!--==============================header=================================-->
<header>
  <div class="line-top">
    <ul class="mr200">
      <!-- <li><h1><img alt="" src="/qzone15/Public/photos/touxiang/default.jpg" width=35 height=35>&nbsp;&nbsp;&nbsp;&nbsp;GNEZGNEZ </h1></li> -->
      <li><a href="">[充值]</a></li>

      <li><a href="<?php echo U('Homepage/out');?>">[退出]</a></li>

    </ul>
  </div>
  <div class="main">
    <div class="row-top">
      <!-- <div style="height:40px;width:200px;"> -->
      <h1 style="height:80px;"><img alt="" src="/qzone15/Public/photos/touxiang/default.jpg" width=80 height=80>&nbsp;&nbsp;&nbsp;&nbsp;<ul class="fr"><li style="width:155px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;"></li>
        </ul> </h1>
      <nav>
        <ul class="sf-menu">
          <li><a href="<?php echo U('Homepage/index');?>">个人中心</a></li>

          <li><a href="<?php echo U('index/index');?>">主页</a></li>
          <li><a href="<?php echo U('Note/index');?>">说说 </a> </li>
          <li><a href="<?php echo U('Diary/index');?>">日志</a></li>
          <li><a href="<?php echo U('Photo/index');?>">相册</a> </li>
          <li><a href="<?php echo U('Personal/index');?>">个人档</a> </li>
          <li><a href="<?php echo U('Leave/index');?>">留言板</a> </li>
          <li><a href="<?php echo U('Friend/index');?>">好友</a> </li>
           <li><a href="index-2.html">设置</a>
            <ul>
              <li><a href="#">设置</a></li>
              <li><a href="#">设置</a>
              <li><a href="#">设置</a></li>
            </ul>
          </li>
        </ul>
      </nav>
      <div class="clear"></div>
    </div>
  </div>

  
  <div class="box-slogan">
    <h3><?php echo ($title); ?></h3>
  </div>
</header>
<div class="copyrights">Collect from <a href="http://www.cssmoban.com/" >Website Template</a></div>
<!--==============================content=================================-->

  <section id="content"><div class="ic"></div>
  <div class="border-horiz"></div>
 
  <div class="box-contact">
    <h3>个人档 <a href="<?php echo U('Personal/edit');?>" style="color:blue;font-size:20px;float:right;">修改</a></h3>
    <form id="contact-form">
      <!-- <div class="success"> Contact form submitted! <strong>We will be in touch soon.</strong> </div> -->
      <fieldset>
        <div class="coll-1">
        <table class="table">
          <?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr>
            <th><img src="/qzone15/Public/photos/touxiang/<?php echo ($vo["photo"]); ?>" width=50 height=50 alt=""></th>
          </tr>
          
          <tr>
            <th>真实姓名:</th>
            <td>
              <?php if($vo["name"] == ''): ?>未填写
              <?php else: echo ($vo["name"]); endif; ?>
              
            </td>
          </tr>
          <tr>
            <th>性别:</th>
            <td>
              <?php if($vo["sex"] == ''): ?>未填写
              <?php elseif($vo["sex"] == '0'): ?>女
              <?php elseif($vo["sex"] == '1'): ?>男
              <?php else: ?>保密<?php endif; ?>
              
            </td>
          </tr>
          <tr>
            <th>手机号码:</th>
            <td>
              <?php if($vo["phone"] == ''): ?>未填写
              <?php else: echo ($vo["phone"]); endif; ?>
              
            </td>
          </tr>
          <tr>
            <th>生日:</th>
            <td>
              <?php if($vo["birth"] == ''): ?>未填写
              <?php else: echo ($vo["birth"]); endif; ?>
              
            </td>
          </tr>
          <tr>
            <th>星座:</th>
            <td>
              <?php if($vo["star"] == ''): ?>未填写
              <?php else: echo ($vo["star"]); endif; ?>
              
            </td>
          </tr>
          <tr>
            <th>现居地:</th>
            <td>
              <?php if($vo["place"] == ''): ?>未填写
              <?php else: echo ($vo["place"]); endif; ?>
              
            </td>
          </tr>
          <tr>
            <th>民族:</th>
            <td>
              <?php if($vo["race"] == ''): ?>未填写
              <?php else: echo ($vo["race"]); endif; ?>
              
            </td>
          </tr><?php endforeach; endif; ?>
        </table>
      </div>
        
        <div class="coll-2">
          <div>
            <div class="form-txt">Information:</div>
             <label class="message">
              <ul>
                <li><a href="" style="color:black;">日志</a></li><span>0</span>
                <li><a href="<?php echo U('Photo/index');?>" style="color:black;">相册</a></li><span>367</span>
                <li><a href="" style="color:black;">说说</a></li><span>16</span>
              </ul>
             <!-- <textarea></textarea>
              <span class="error">*The message is too short.</span> <span class="empty">*This field is required.</span>--> </label> 
            <div class="clear"></div>
          </div>
        </div>
        <div class="clear"></div>
        <!-- <div class="btns">

         <a class="btn" data-type="reset">Clear</a> <a class="btn" data-type="submit">send</a> 
       </div> -->
      </fieldset>
    </form>
  </div>
</section>

<!--==============================footer=================================-->
<footer>
  <div class="main">
   <!--  <ul class="soc-list">
      <li><a href="#"><img alt="" src="/qzone15/Public/homepage/images/icon-1.png"></a></li>
      <li><a href="#"><img alt="" src="/qzone15/Public/homepage/images/icon-2.png"></a></li>
      <li><a href="#"><img alt="" src="/qzone15/Public/homepage/images/icon-3.png"></a></li>
      <li><a href="#"><img alt="" src="/qzone15/Public/homepage/images/icon-4.png"></a></li>
    </ul> -->
    <!-- <div class="policy">Professional free website templates <a href="http://www.cssmoban.com" target="_blank">at www.cssmoban.com</a>.<br>Website Template Collet from <a href="http://www.cssmoban.com" >www.cssmoban.com</a> </div> -->
    <?php if(is_array($linklist)): foreach($linklist as $key=>$vo): ?><ul class="link">
      <li><a href="<?php echo ($vo["linkaddress"]); ?>"><?php echo ($vo["linkname"]); ?>&nbsp;&nbsp;|&nbsp;&nbsp;</a></li>
      
    </ul>
    
    </script><?php endforeach; endif; ?>
    <center><p class="linkm">Copyright © 2005 - 2016 Tencent. <a href="http://www.tencent.com/en-us/le/copyrightstatement.shtml">All Rights Reserved.</a></p></center>
    <center>ykz Company<center>
    <div class="clear"></div>
  </div>
</footer>

</body>
</html>