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
	  <div class="container_12">
	   	

	    <article class="side-bar extra">
	    	<ul>
	    		<h4 style="color:black;"><li><a href="" style="color:black;">照片</a>&nbsp;&nbsp;&nbsp;&nbsp;<span>0</span></li></h4>
	    		<h4 style="color:black;"><li><a href="" style="color:black;">说说</a>&nbsp;&nbsp;&nbsp;&nbsp;<span>0</span></li></h4>
	    		<h4 style="color:black;"><li><a href="" style="color:black;">日志</a>&nbsp;&nbsp;&nbsp;&nbsp;<span>0</span></li></h4>
	    	</ul>
	    	<br>
	    	<hr>
	    	<br>
	      <!-- <h3><strong>3</strong> Steps <em>To become<br>
	        a perfect cook</em> </h3>
	      <ul class="list-dropcap1">
	        <li>
	          <div class="wrapper">
	            <div class="dropcap">1</div>
	            <h4>Enter our <br>
	              school</h4>
	          </div>
	          <p>At vero eos et accusam justo duo dolores et ea Stet clita kasd gubergren.</p>
	          <a href="#" class="btn">Read more</a> </li>
	        <li>
	          <div class="wrapper">
	            <div class="dropcap">2</div>
	            <h4>Education
	              Courses</h4>
	          </div>
	          <p>takimata snctus Lorem ipsum dolor sit am Lorem ipsum dolor sit consetetur.</p>
	          <a href="#" class="btn">Read more</a> </li>
	        <li>
	          <div class="wrapper">
	            <div class="dropcap">3</div>
	            <h4>Practical
	              Training</h4>
	          </div>
	          <p>sadipscing elitsed diaonumy eirmod tempor duo dolores et ea rebum. Stet clita.</p>
	          <a href="#" class="btn">Read more</a> </li>
	      </ul> -->
	      <h4><a href="" style="color:black;">个人档</a></h4>
	      <br>
	      <hr>
	      <br>
			<h4><a href="" style="color:black;">留言板</a></h4>
			<br>
	    </article>
	    <!-- <article class="side-bar extra">
	    </article> -->
	    

	    <article class="grid_8">
	      <h3>我的动态</h3>
	      <ul class="list-recipes">
	        <li>
	          <figure class="box-img"><img src="images/page3-img1.jpg " alt="" /></figure>
	          <div class="overflow">
	            <!-- <h4><img src="/qzone/Public/photos/touxiang/default.jpg" alt=""></h4> -->
	            <h5 style="color:black;">gnezgnez</h5>
	            <p>
	            	<h4><img src="/qzone/Public/photos/touxiang/default.jpg" alt=""></h4>
	            	再见</p>
	          </div>
	          <div class="clear"></div>
	        </li>
	        <hr>
	        <li>
	          <figure class="box-img"><img src="images/page3-img2.jpg " alt="" /></figure>
	          <div class="overflow">
	            <h4>consetetur elitr</h4>
	            <p>aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.
	              no sea takimata sanctus est Lor ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur. sadipscing</p>
	          </div>
	          <div class="clear"></div>
	        </li>
	        <li>
	          <figure class="box-img"><img src="images/page3-img3.jpg " alt="" /></figure>
	          <div class="overflow">
	            <h4>consetetur sadipscing</h4>
	            <p>sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo.
	              dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
	          </div>
	          <div class="clear"></div>
	        </li>
	      </ul>
	    </article>
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