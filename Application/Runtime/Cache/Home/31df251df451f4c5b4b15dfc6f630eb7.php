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
    <h3>个人档 </h3>
    <form id="contact-form" action="<?php echo U('Personal/save');?>" method="post">
      <div class="success"> Contact form submitted! <strong>We will be in touch soon.</strong> </div>
      <fieldset>
      <?php if(is_array($list)): foreach($list as $key=>$vo): ?><div class="coll-1">
          <div>
            <div class="form-txt">昵称:</div>
            <label class="name">
              <!-- 长度限制 -->
              <input type="text" name="username" value="<?php echo ($vo["username"]); ?>">
              <!-- <span class="error">*This is not a valid name.</span> <span class="empty">*This field is required.</span> </label> -->
            <div class="clear"></div>
          </div>
          <div>
            <div class="form-txt">真实姓名:</div>
            <label class="name">
              <input type="text" name="name" value="<?php echo ($vo["name"]); ?>">
              <!-- <span class="error">*This is not a valid name.</span> <span class="empty">*This field is required.</span> --></label> 
            <div class="clear"></div>
          </div>
          <div>
            <div class="form-txt">电话号码:</div>
            <label class="phone">
              <input type="tel" name="phone" value="<?php echo ($vo["phone"]); ?>">
              <span class="error">*This is not a valid phone number.</span> <span class="empty">*This field is required.</span> </label>
            <div class="clear"></div>
          </div>
          <div>
            <div class="form-txt">性别:</div>
            <!-- <label class="email"> -->
           
              <select name="" id="" style="width:50px;">
                <option value="0" <?php if($vo["sex"] == '0'): ?>selected<?php endif; ?>>女</option>
                <option value="1" <?php if($vo["sex"] == '1'): ?>selected<?php endif; ?>>男</option>
              </select>
              <!-- <span class="error">*This is not a valid email address.</span> <span class="empty">*This field is required.</span>  -->
            <!-- </label> -->
            <br><br>
            <div class="clear"></div>
          </div>
          <div>
            <div class="form-text">出生年月</div>
            <select name="birth_y" id="">
            <?php if(is_array($year)): foreach($year as $key=>$y): ?><option <?php if($y["year"] == $biry): ?>selected<?php endif; ?>><?php echo ($y["year"]); ?></option><?php endforeach; endif; ?>  
            </select>

            <select name="birth_m" id="mon">
             
            </select>
            <script>
                for(var i=1;i<=12;i++){
                  mon.add(new Option(i,i));
                }    
            </script>

            <select name="birth_d" id="date">
            </select>
            <script>
                for(var i=1;i<=31;i++){
                  date.add(new Option(i,i));
                }    
            </script>

            <br><br>
            <div class="clear"></div>
          </div>
          <div>
            <div class="form-text">住址</div>
            <select name="" id="">
              <option value="0">江苏省</option>
            </select>
            <select name="" id="">
              <option value="0">泰州</option>
            </select>
            <br><br>
            <div class="clear"></div>
          </div>
          <div>
            <div class="form-txt">民族:</div>
            <label class="name">
              <input type="text" name="race" value="<?php echo ($vo["race"]); ?>">
              <!-- <span class="error">*This is not a valid name.</span> <span class="empty">*This field is required.</span> </label> -->
            <div class="clear"></div>
          </div>
        </div>
     

        <div class="coll-2">
          <div>
            <div class="form-txt">个性签名:</div>
             <label class="message">
              
              <textarea></textarea>
              <span class="error">*The message is too short.</span> <span class="empty">*This field is required.</span> </label> 
            <div class="clear"></div>
          </div>
        </div><?php endforeach; endif; ?>
        <div class="clear"></div>
        <div class="btns"> <button class="btn" >保存</button><!--  <a class="btn" data-type="submit">send</a> --> </div>
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