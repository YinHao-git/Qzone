<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<meta charset="utf-8">
<!--css-->
<link rel="stylesheet" href="/qzone17/Public/homepage/css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="/qzone17/Public/homepage/css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="/qzone17/Public/homepage/css/grid.css" type="text/css" media="screen">
<link rel="icon" href="/qzone17/Public/homepage/images/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="/qzone17/Public/homepage/images/favicon.ico" type="image/x-icon" />
<!-- <link href='http://fonts.googleapis.com/css?family=PT+Serif+Caption:400,400italic' rel='stylesheet' type='text/css'> -->
<link rel="stylesheet" href="/qzone17/Public/homepage/css/flexslider.css" type="text/css" media="screen">
<link rel="stylesheet" href="/qzone17/Public/my.css" type="text/css" media="screen">

<!-- Bootstrap -->
   <!--  <link href="/qzone17/Public/dist/css/bootstrap.min.css" rel="stylesheet"> -->

<!--js-->
<script type="text/javascript" src="/qzone17/Public/js/date/jquery-1.8.3.min.js" ></script>
<script type="text/javascript" src="/qzone17/Public/js/date/calender.js" ></script>
<script type="text/javascript" src="/qzone17/Public/homepage/js/superfish.js"></script>
<script type="text/javascript" src="/qzone17/Public/homepage/js/jquery.flexslider-min.js"></script>

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
      background-image: url('/qzone17/Public/home/dis/images/11.jpg');
    }

  </style>
</head>

<body>

<!--==============================header=================================-->
<header>
  <div class="line-top">
    <ul class="mr200">
      <!-- <li><h1><img alt="" src="/qzone17/Public/photos/touxiang/default.jpg" width=35 height=35>&nbsp;&nbsp;&nbsp;&nbsp;GNEZGNEZ </h1></li> -->
      <li><a href="">[充值]</a></li>

      <li><a href="<?php echo U('Homepage/out');?>">[退出]</a></li>

    </ul>
  </div>
  <div class="main">
    <div class="row-top">
      <!-- <div style="height:40px;width:200px;"> -->
      <h1 style="height:80px;"><img alt="" src="/qzone17/Public/photos/touxiang/default.jpg" width=80 height=80>&nbsp;&nbsp;&nbsp;&nbsp;<ul class="fr"><li style="width:155px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;"></li>
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
 <div class="border-horiz"></div>
<!--==============================content=================================-->

  <section id="content"><div class="ic"></div>
  <!-- <div class="border-horiz"></div> -->
 
  <div class="box-pwd">
    <h3> 修改密码<a href="<?php echo U('Personal/editpwd');?>" style="color:blue;font-size:20px;float:right;"></a></h3>
    <!-- <form id="contact-form" action="<?php echo U('Personal/savepwd');?>" method="post"> -->
    <form id="contact-form">

      <!-- <div class="success"> Contact form submitted! <strong>We will be in touch soon.</strong> </div> -->
      <fieldset>
      
        <div class="coll-1">
          <div>
            <div class="form-txt">新密码:</div>
            <label class="name">
              <!-- 长度限制 -->
              <input id="pwd" type="password" name="pwd">
              <span class="error">*This is not a valid name.</span> <span class="empty">*This field is required.</span> </label>
            <div class="clear"></div>
          </div>
          <div>
            <div class="form-txt">确认密码:</div>
            <label class="name">
              <input id="repwd" type="password" name="repwd">
              <span class="error">*This is not a valid name.</span> <span class="empty">*This field is required.</span></label> 
            <!-- <div class="clear"></div> -->
          </div>
       <div class="clear"></div>
        <div > <button class="btn" >保存</button><!--  <a class="btn" data-type="submit">send</a> --> </div>
        
      </fieldset>
    </form>

  </div>
</section>

<!--==============================footer=================================-->
<footer>
  <center>
  <div class="footmain">
   <!--  <ul class="soc-list">
      <li><a href="#"><img alt="" src="/qzone17/Public/homepage/images/icon-1.png"></a></li>
      <li><a href="#"><img alt="" src="/qzone17/Public/homepage/images/icon-2.png"></a></li>
      <li><a href="#"><img alt="" src="/qzone17/Public/homepage/images/icon-3.png"></a></li>
      <li><a href="#"><img alt="" src="/qzone17/Public/homepage/images/icon-4.png"></a></li>
    </ul> -->
    <!-- <div class="policy">Professional free website templates <a href="http://www.cssmoban.com" target="_blank">at www.cssmoban.com</a>.<br>Website Template Collet from <a href="http://www.cssmoban.com" >www.cssmoban.com</a> </div> -->
   <!-- <center> -->
    <ul class="soc-list link">
      <?php if(is_array($linklist)): foreach($linklist as $key=>$vo): ?><li><a href="<?php echo ($vo["linkaddress"]); ?>"><?php echo ($vo["linkname"]); ?>&nbsp;|&nbsp;</a></li><?php endforeach; endif; ?>
    </ul>
    <!-- </center> -->
    <!-- </script> -->
     
    <br>
    <!-- <center> --><p class="linkm">Copyright © 2005 - 2016 Tencent. <a href="http://www.tencent.com/en-us/le/copyrightstatement.shtml">All Rights Reserved.</a></p><!-- </center> -->
    <!-- <center> -->ykz Company<!-- </center> -->
    <div class="clear"></div>
  </div>
</center>
</footer>

</body>

  <script>
    $('#pwd').blur(function(){
      // alert(1);
      // console.log($('#pwd').html);
    });
    $("button").click(function(){
      // alert(1)
      $.ajax({
        type:'post',
        url:"<?php echo U('Personal/savepwd');?>",
        dataType:'json',
        data:pwd,
        // data:$('#contact-form').serialize(),
        success:function(data){
          alert(data);
        },
        error:function(data){
          alert('失败');
        }
      });
      
    });
  </script>
    

</html>