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

  
  <div class="box-slogan">
    <h3><?php echo ($title); ?></h3>
    <!-- <p> At vero eos et <a href="#" class="link-1">accusam et</a> justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet lorem ipsum dolor sit amet. </p> -->
  </div>
</header>
<div class="copyrights">Collect from <a href="http://www.cssmoban.com/" >Website Template</a></div>
<!--==============================content=================================-->

<section id="content"><div class="ic"></div>
  <div class="border-horiz"></div>
  <div class="container_12 row-1">
    <article class="grid_4 thumbnail-1">
      <h3><span></span>相册一 </h3>
      <figure class="box-img"><img src="/qzone/Public/homepage/images/page1-img1.jpg " alt="" /></figure>
      <p><a href="http://www.cssmoban.com/" class="link-1"><!-- Click here --></a>相册描述<br> qwerqwerqwerqwerqwer</p>
      <!-- <a href="http://www.cssmoban.com/" class="btn">Read more</a>  --></article>

      <article class="grid_4 thumbnail-1">
      <h3><span></span>相册一 </h3>
      <figure class="box-img"><img src="/qzone/Public/homepage/images/page1-img1.jpg " alt="" /></figure>
      <p><a href="http://www.cssmoban.com/" class="link-1"><!-- Click here --></a>相册描述<br> qwerqwerqwerqwerqwer</p>
      <!-- <a href="http://www.cssmoban.com/" class="btn">Read more</a>  --></article>


    <article class="grid_4 thumbnail-1">
      <h3><span>grill</span> cookings </h3>
      <figure class="box-img"><img src="/qzone/Public/homepage/images/page1-img2.jpg " alt="" /></figure>
      <p>This web template is optimized for 1280X1024 screen resolution. It is also XHTML &amp; CSS valid.</p>
      <a href="http://www.cssmoban.com/" class="btn">Read more</a> </article>
    <article class="grid_4 thumbnail-1">
      <h3><span>dessert</span> cookings </h3>
      <figure class="box-img"><img src="/qzone/Public/homepage/images/page1-img3.jpg " alt="" /></figure>
      <p>The PSD source files of this template are available for free for the registered members.</p>
      <a href="http://www.cssmoban.com/" class="btn">Read more</a> </article>
    <div class="clear"></div>
  </div>
  <div class="border-horiz"></div>
  <div class="container_12">
    <!-- <article class="grid_4">
      <h3>popular</h3>
      <ul class="list-popular">
        <li> <a href="#">Lighter cooking</a>
          <p>At vero eos et accusam etusto dolores et ea rebum.</p>
        </li>
        <li> <a href="#">Pudding</a>
          <p>Duis autem vel eum iriure dolor in hendrerit.</p>
        </li>
        <li> <a href="#">Black bean salsa</a>
          <p>Molestie consequat, vel illum dolore eu feugiat.</p>
        </li>
        <li> <a href="#">Asparagus</a>
          <p>Vulputate velit esse molestie consequat.</p>
        </li>
      </ul>
    </article> -->
    <!-- <article class="grid_8">
      <h3>Professional programs</h3>
      <blockquote class="quote-1"> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquym erat, sed diam voluptua At vero eos. </blockquote>
      <div class="name-author">- James Willis</div>
      <ul class="list-dropcap">
        <li>
          <div class="wrapper">
            <div class="dropcap">A</div>
            <a href="#">Lorpsum dolor</a> </div>
          <figure class="box-img"><img src="/qzone/Public/homepage/images/page1-img4.jpg " alt="" /></figure>
        </li>
        <li>
          <div class="wrapper">
            <div class="dropcap">B</div>
            <a href="#">consetet
            sadiping </a> </div>
          <figure class="box-img"><img src="/qzone/Public/homepage/images/page1-img5.jpg " alt="" /></figure>
        </li>
        <li>
          <div class="wrapper">
            <div class="dropcap">C</div>
            <a href="#">diam nonumy </a> </div>
          <figure class="box-img"><img src="/qzone/Public/homepage/images/page1-img6.jpg " alt="" /></figure>
        </li>
      </ul>
    </article> -->
    <div class="clear"></div>
  </div>
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