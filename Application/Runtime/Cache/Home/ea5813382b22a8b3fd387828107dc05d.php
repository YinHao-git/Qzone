<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<meta charset="utf-8">
<!--css-->
<link rel="stylesheet" href="/qzone/Public/homepage/css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="/qzone/Public/homepage/css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="/qzone/Public/homepage/css/grid.css" type="text/css" media="screen">
<link rel="icon" href="/qzone/Public/homepage/images/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="/qzone/Public/homepage/images/favicon.ico" type="image/x-icon" />
<!-- <link href='http://fonts.googleapis.com/css?family=PT+Serif+Caption:400,400italic' rel='stylesheet' type='text/css'> -->
<link rel="stylesheet" href="/qzone/Public/homepage/css/flexslider.css" type="text/css" media="screen">
<link rel="stylesheet" href="/qzone/Public/my.css" type="text/css" media="screen">

<!-- Bootstrap -->
   <!--  <link href="/qzone/Public/dist/css/bootstrap.min.css" rel="stylesheet"> -->

<!--js-->
<script type="text/javascript" src="/qzone/Public/homepage/js/jquery-1.7.1.min.js" ></script>
<script type="text/javascript" src="/qzone/Public/homepage/js/superfish.js"></script>
<script type="text/javascript" src="/qzone/Public/homepage/js/jquery.flexslider-min.js"></script>

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


	<!--[if lt IE 8]>
      <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://www.cssmoban.com">
          <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
       </a>
     </div>
    <![endif]-->
    
	<!--[if lt IE 9]>
   		<script src="js/html5.js"></script>
  		<link rel="stylesheet" href="css/ie.css"> 
       <link href='http://fonts.googleapis.com/css?family=PT+Serif+Caption:400italic' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=PT+Serif+Caption:400' rel='stylesheet' type='text/css'>
	<![endif]-->

</head>

<body>

<!--==============================header=================================-->
<header>
  <div class="line-top">
    <ul class="mr200">

      <li><h1><img alt="" src="/qzone/Public/photos/touxiang/default.jpg" width=35 height=35>&nbsp;&nbsp;&nbsp;&nbsp;GNEZGNEZ </h1></li>
      <li><a href="">[充值]</a></li>

      <li><a href="">[退出]</a></li>

    </ul>
  </div>
  <div class="main">
    <div class="row-top">
      <!-- <div style="height:40px;width:200px;"> -->
      <h1 style="height:80px;"><img alt="" src="/qzone/Public/photos/touxiang/default.jpg" width=80 height=80>&nbsp;&nbsp;&nbsp;&nbsp;<ul class="fr"><li style="width:155px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;"><!-- <h4> -->GNEZGNEZsrdadadada<!-- </h4> --></li><li>等级: <span>12</span>  </li></ul> </h1>
      <!-- <p class="ml20"></p> -->
      <!-- </div> -->
      <nav>
        <ul class="sf-menu">
          <li><a href="<?php echo U('Homepage/index');?>">个人中心</a></li>

          <li><a href="<?php echo U('Homepage/main');?>">主页</a></li>
          <li><a href="index-1.html">说说 </a> </li>
          <li><a href="index-2.html">日志</a>
            <!-- <ul>
              <li><a href="#">dolores et</a></li>
              <li><a href="#">lorem ipsum dolo </a>
              <li><a href="#">sanctus est</a></li>
            </ul> -->
          </li>
          <li><a href="<?php echo U('Photo/index');?>">相册</a> </li>
          <li><a href="<?php echo U('Personal/index');?>">个人档</a> </li>
          <li><a href="index-5.html">留言板</a> </li>
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
        <li> <img alt="" src="/qzone/Public/homepage/images/slide-1.jpg"></li>
        <li> <img alt="" src="/qzone/Public/homepage/images/slide-2.jpg"></li>
      </ul>
    </div>
  </div>
  
  <div class="box-slogan">
    <h3><?php echo ($title); ?></h3>
    <!-- <p> At vero eos et <a href="#" class="link-1">accusam et</a> justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet lorem ipsum dolor sit amet. </p> -->
  </div>
</header>
<div class="copyrights">Collect from <a href="http://www.cssmoban.com/" >Website Template</a></div>
<!--==============================content=================================-->

<section id="content"><div class="ic"></div>
  <div class="border-horiz"></div>
  <div class="container_12">
    <article class="side-bar extra1">
      <!-- <h3><span>aBOUT</span>oUR sCHOOL</h3>
      <figure class="box-img img-indent1"><img src="images/page5-img1.jpg " alt="" /></figure>
      <div class="inner-1"> <a href="#" class="link-1">At vero eos et accusam et justo duo dolores et ea rebum. </a>
        <p>Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore.</p>
        <p>magna aliquyam erat, accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit consetetur sadipscing elitr.</p>
        <a href="#" class="btn">Read more</a> </div> -->
    </article>
    <article class="grid_8">
      <h3>好友动态</h3>
      <ul class="list-recipes extra">
        <li>
          <p>昵称</p>
          <!-- <figure class="box-img"><img src="images/page5-img2.jpg " alt="" /></figure> -->
          <div class="overflow">
           <!--  <h4>Danis bowing</h4> -->
            <p>说说内容<!-- sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam. et justo duo dolores et ea rebum. --></p>
            <!-- <a href="#" class="btn">Read more</a> -->
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
      <li><a href="#"><img alt="" src="/qzone/Public/homepage/images/icon-1.png"></a></li>
      <li><a href="#"><img alt="" src="/qzone/Public/homepage/images/icon-2.png"></a></li>
      <li><a href="#"><img alt="" src="/qzone/Public/homepage/images/icon-3.png"></a></li>
      <li><a href="#"><img alt="" src="/qzone/Public/homepage/images/icon-4.png"></a></li>
    </ul>
    <div class="policy">Professional free website templates <a href="http://www.cssmoban.com" target="_blank">at www.cssmoban.com</a>.<br>Website Template Collet from <a href="http://www.cssmoban.com" >www.cssmoban.com</a> </div>
    <div class="clear"></div>
  </div>
</footer>

</body>
</html>