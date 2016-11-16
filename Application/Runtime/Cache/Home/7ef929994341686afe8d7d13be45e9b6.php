<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : The Fences
Description: A two-column, fixed-width design for 1024x768 screen resolutions.
Version    : 1.0
Released   : 20100308

-->
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title><?php echo ($title); ?></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="/qzone16/Public/home/css/diary.css" rel="stylesheet" type="text/css" media="screen" />

</head>
<body>
	<div id="logo">
		<h1><a href="#">日志  </a></h1>
		<p><em></a></em></p>
	</div>
	<hr />
	<!-- end #logo -->
	<div id="header">
		<div id="menu">
			<ul>
				<li><a href="<?php echo U('Index/index');?>">首页</a></li>
				<li><a href="<?php echo U('Diary/index');?>" class="first">日志首页</a></li>
				<li class="current_page_item"><a href="<?php echo U('Diary/write');?>">发表日志</a></li>
				<li><a href="<?php echo U('Diary/fdiary');?>">好友日志</a></li>
			</ul>
		</div>

	</div>
	<!-- end #header -->
	<!-- end #header-wrapper -->
	<div id="page">
		<div id="contents">


		<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="post">
				<h2 class="title"><a href=""><?php echo ($v["title"]); ?></a></h2>
				<p class="meta"><?php echo (date('Y-m-d H:i:s',$v["addtime"])); ?> <a href="#"> <?php echo ($v["username"]); ?></a></p>
				<div class="entry">
					<p><?php echo ($v["content"]); ?></p>
					<p style="text-align:right"><a href="<?php echo U('Diary/del',array('id'=>$v['id']));?>">删除</a></p>
			</div>
			<p class='detail'>查看日志</p>
		  </div><?php endforeach; endif; else: echo "" ;endif; ?>


		</div><!-- end #content -->


		<div style="clear: both;">&nbsp;</div>
	</div>
	<!-- end #page -->
	<div id="footer">
		<p>Copyright (c) 2008 Sitename.com. All rights reserved. Design by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a>.</p>
	</div>
	<!-- end #footer -->
	<script src='/qzone16/Public/home/js/jquery-1.10.2.min.js'></script>
	<script type="text/javascript" src="/qzone16/Public/home/js/jquery.nicescroll.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){

			$('.detail').bind({
            	'mouseover':function(){
                	$(this).css({'color':'#238EC6','cursor':'pointer'});
	            },
	            'mouseout':function(){
	                $(this).css({'color':''});
	            },
				'click':function(){
					if ($(this).prev('div').is(':hidden')) {
						$(this).prev('div').slideDown('slow');
						$(this).html('收起');
					} else {
						$(this).prev('div').slideUp('slow');
						$(this).html('查看日志');
					}
				}
        	})

			$('#page').niceScroll({
	           cursorcolor: "#ccc",//#CC0071 光标颜色
	           cursoropacitymax: 1, //改变不透明度非常光标处于活动状态（scrollabar“可见”状态），范围从1到0
	           touchbehavior: false, //使光标拖动滚动像在台式电脑触摸设备
	           cursorwidth: "8px", //像素光标的宽度
	           cursorborder: "0", // 	游标边框css定义
	           cursorborderradius: "5px",//以像素为光标边界半径
	           autohidemode: false //是否隐藏滚动条
	        });
		})
	</script>
</body>
</html>