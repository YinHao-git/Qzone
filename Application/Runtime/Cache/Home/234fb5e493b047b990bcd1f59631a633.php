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

  
  <div class="box-slogan">
    <h3><?php echo ($title); ?></h3>
  </div>
</header>
<div class="copyrights">Collect from <a href="http://www.cssmoban.com/" >Website Template</a></div>
<!--==============================content=================================-->

	 <div class="padd-1" style="margin-left:300px;">
        <h3>我的好友</h3>
     </div>
		<div class="dropdown col-md-2" style="background:#abcdef;width:600px;height:160px;">
			  <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
			   	<?php if(is_array($li)): $i = 0; $__LIST__ = $li;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$s): $mod = ($i % 2 );++$i;?><span>
			   		<li >
		                <a data-toggle="dropdown" href="#" style="font-size:28px;color:red;">新消息</a> <br>
						昵称: <?php echo ($s["username"]); ?>&nbsp;&nbsp;<br/>
						性别：<?php if($v["sex"] == '0'): ?>女
			                    <?php else: ?>男<?php endif; ?>&nbsp;&nbsp;<br/>
						<a class='btn btn-success' href="<?php echo U('Friend/yes',array('id'=>$s['id']));?>"> 同意</a>&nbsp;&nbsp;
						<a class="btn btn-default" href="<?php echo U('Friend/no');?>">	 拒绝</a>
			   		</li>
		   		</span><?php endforeach; endif; else: echo "" ;endif; ?>
	        </ul>
		</div>
	  <center>
		<form action="<?php echo U('Friend/add');?>" met
			hod="post">
	     <div>
	     	<input type="text" name="phone" placeholder="输入手机号" style="width:200px;height:30px">
	     	<button style="width:100px;height:40px;background:#abcdef;cursor:pointer;">搜索好友</button>
	     </div>
	    </form>
     <table class="table table-hover"  width="600px" cellspacing="0" style="text-align: center;color:gray">
		<tr>
			<td><b>好友昵称</b></td>
			<td><b>好友性别</b></td>
			<td><b>好友手机</b></td>
			<td><b>删除好友</b></td>
		</tr>
		<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
			<td><?php echo ($v["username"]); ?></td>
			<td> 
				<?php if($v["sex"] == '0'): ?>女
                    <?php else: ?>男<?php endif; ?>
            </td>
			<td><?php echo ($v["phone"]); ?></td>
			<td>
                <input type="hidden" value="<?php echo ($v["id"]); ?>">
                <a href="<?php echo U('del',array('id'=>$v['id']));?>" class="btn btn-danger" style="cursor:pointer;">点击删除</a>
			</td>
			</tr><?php endforeach; endif; else: echo "" ;endif; ?>
	</table>
</center>

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