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
 <!--  <div class="main">
    <h3>Contact Information</h3>
    <div class="box-address">
      <h4>Company Name Inc.</h4>
      <dl class="address">
        <dt>8901 Marmora Road,<br>
          Glasgow, D04 89GR.</dt>
        <dd> <span>Freephone:</span> +1 800 559 6580</dd>
        <dd> <span>Telephone:</span> +1 959 603 6035</dd>
        <dd> <span>FAX:</span> +1 504 889 9898</dd>
        <dd> E-mail: <a class="mail-1" href="#">mail@demolink.org</a> </dd>
      </dl>
    </div>
    <div class="map box-img">
      <iframe src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Brooklyn,+New+York,+NY,+United+States&amp;aq=0&amp;sll=37.0625,-95.677068&amp;sspn=61.282355,146.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Brooklyn,+Kings,+New+York&amp;ll=40.649974,-73.950005&amp;spn=0.01628,0.025663&amp;z=14&amp;iwloc=A&amp;output=embed"> </iframe>
    </div>
    <div class="clear"></div>
  </div> -->
  <div class="box-contact">
    <h3>个人档 <a href="<?php echo U('Personal/edit');?>" style="color:blue;font-size:20px;float:right;">修改</a></h3>
    <form id="contact-form">
      <!-- <div class="success"> Contact form submitted! <strong>We will be in touch soon.</strong> </div> -->
      <fieldset>
        <div class="coll-1">
        <table class="table">
          <tr>
            <th><img src="/qzone/Public/photos/touxiang/default.jpg" width=50 height=50 alt=""></th>
          </tr>
          <tr>
            <th>真实姓名:</th>
            <td>zengzhen</td>
          </tr>
          <tr>
            <th>性别:</th>
            <td>女</td>
          </tr>
          <tr>
            <th>手机号码:</th>
            <td>15599019180</td>
          </tr>
          <tr>
            <th>生日:</th>
            <td>十月十六</td>
          </tr>
          <tr>
            <th>星座:</th>
            <td>摩羯座</td>
          </tr>
          <tr>
            <th>现居地:</th>
            <td>中国 江苏 泰州</td>
          </tr>
          <tr>
            <th>民族:</th>
            <td>汉</td>
          </tr>
        </table>
      </div>
        <!-- <div class="coll-1">
          <div>
            <div class="form-txt">真实姓名:</div>
            <label class="name">

              <input type="text">
              <span class="error">*This is not a valid name.</span> <span class="empty">*This field is required.</span> </label>
            <div class="clear"></div>
          </div>
          <div>
            <div class="form-txt">Telephone:</div>
            <label class="phone">
              <input type="tel">
              <span class="error">*This is not a valid phone number.</span> <span class="empty">*This field is required.</span> </label>
            <div class="clear"></div>
          </div>
          <div>
            <div class="form-txt">Email:</div>
            <label class="email">
              <input type="email">
              <span class="error">*This is not a valid email address.</span> <span class="empty">*This field is required.</span> </label>
            <div class="clear"></div>
          </div>
        </div> -->
        <div class="coll-2">
          <div>
            <div class="form-txt">Information:</div>
             <label class="message">
              <ul>
                <li><a href="" style="color:black;">日志</a></li><span>0</span>
                <li><a href="" style="color:black;">相册</a></li><span>367</span>
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