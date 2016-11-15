<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<meta charset="utf-8">
<!--css-->
<link rel="stylesheet" href="/kongchen/Public/homepage/css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="/kongchen/Public/homepage/css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="/kongchen/Public/homepage/css/grid.css" type="text/css" media="screen">
<link rel="icon" href="/kongchen/Public/homepage/images/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="/kongchen/Public/homepage/images/favicon.ico" type="image/x-icon" />
<!-- <link href='http://fonts.googleapis.com/css?family=PT+Serif+Caption:400,400italic' rel='stylesheet' type='text/css'> -->
<link rel="stylesheet" href="/kongchen/Public/homepage/css/flexslider.css" type="text/css" media="screen">
<link rel="stylesheet" href="/kongchen/Public/my.css" type="text/css" media="screen">

<!-- Bootstrap -->
   <!--  <link href="/kongchen/Public/dist/css/bootstrap.min.css" rel="stylesheet"> -->

<!--js-->
<script type="text/javascript" src="/kongchen/Public/homepage/js/jquery-1.7.1.min.js" ></script>
<script type="text/javascript" src="/kongchen/Public/homepage/js/superfish.js"></script>
<script type="text/javascript" src="/kongchen/Public/homepage/js/jquery.flexslider-min.js"></script>

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
      background-image: url('/kongchen/Public/home/dis/images/11.jpg');
    }

  </style>
</head>

<body>

<!--==============================header=================================-->
<header>
  <div class="line-top">
    <ul class="mr200">
      <!-- <li><h1><img alt="" src="/kongchen/Public/photos/touxiang/default.jpg" width=35 height=35>&nbsp;&nbsp;&nbsp;&nbsp;GNEZGNEZ </h1></li> -->
      <li><a href="">[充值]</a></li>

      <li><a href="<?php echo U('Homepage/out');?>">[退出]</a></li>

    </ul>
  </div>
  <div class="main">
    <div class="row-top">
      <!-- <div style="height:40px;width:200px;"> -->
      <h1 style="height:80px;"><img alt="" src="/kongchen/Public/photos/touxiang/default.jpg" width=80 height=80>&nbsp;&nbsp;&nbsp;&nbsp;<ul class="fr"><li style="width:155px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;"></li>
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

  
  <div class="box-slider">
    <div class="flexslider">
      <ul class="slides">
        <li> <img alt="" src="/kongchen/Public/homepage/images/slide-1.jpg"></li>
        <li> <img alt="" src="/kongchen/Public/homepage/images/slide-2.jpg"></li>
      </ul>
    </div>
  </div>
  
  <div class="box-slogan">
    <h3><?php echo ($title); ?></h3>
  </div>
</header>
<div class="copyrights">Collect from <a href="http://www.cssmoban.com/" >Website Template</a></div>
<!--==============================content=================================-->

<section id="content">

  <!-- <div class="border-horiz"></div> -->
  <div class="container_12">
    <article class="side-bar extra1">
    </article>
    <article class="grid_8">
      <h3>好友动态</h3>
      <ul class="list-recipes extra">
        <li>
          <p>昵称</p>
          <div class="overflow">
            <p>说说内容</p>
            <p>发表时间</p>
          </div>
          <div class="clear"></div>
        </li>
        <hr>
        <li>
          <figure class="box-img"><img src="images/page5-img3.jpg " alt="" /></figure>
          <div class="overflow">
            <h4>Sam Dowson</h4>
            <p>sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam. et justo duo dolores et ea rebum.</p>
            <a href="#" class="btn">Read more</a> </div>
          <div class="clear"></div>
        </li>
        <li>
          <figure class="box-img"><img src="images/page5-img4.jpg " alt="" /></figure>
          <div class="overflow">
            <h4>Jane smart</h4>
            <p>sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam. et justo duo dolores et ea rebum.</p>
            <a href="#" class="btn">Read more</a> </div>
          <div class="clear"></div>
        </li>
      </ul>
    </article>
    <div class="clear"></div>
  </div>
</section>
</section>

<!--==============================footer=================================-->
<footer>
  <div class="main">
    <ul class="soc-list">
      <li><a href="#"><img alt="" src="/kongchen/Public/homepage/images/icon-1.png"></a></li>
      <li><a href="#"><img alt="" src="/kongchen/Public/homepage/images/icon-2.png"></a></li>
      <li><a href="#"><img alt="" src="/kongchen/Public/homepage/images/icon-3.png"></a></li>
      <li><a href="#"><img alt="" src="/kongchen/Public/homepage/images/icon-4.png"></a></li>
    </ul>
    <div class="policy">Professional free website templates <a href="http://www.cssmoban.com" target="_blank">at www.cssmoban.com</a>.<br>Website Template Collet from <a href="http://www.cssmoban.com" >www.cssmoban.com</a> </div>
    <div class="clear"></div>
  </div>
</footer>

</body>
</html>