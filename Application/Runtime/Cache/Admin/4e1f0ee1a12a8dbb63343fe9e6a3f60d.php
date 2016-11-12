<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="cn">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="/Public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Public/my.css">
</head>
<body>
	<div class="container">
		<h1><?php echo ($title); ?></h1>
		<div class="center-block mt20">
			<a href="<?php echo U('index');?>" class="btn btn-primary">首页</a>
			<a href="<?php echo U('add');?>" class="btn btn-success">添加</a>
		</div>
		<hr>
		
<form action="<?php echo U('User/insert');?>" method="post" class="h3">
	name:
	<input type="text" name="name" placeholder="请输入用户名"><br><br>
	place:
	<input type="text" name="place" placeholder="请输入地址"><br><br>
	<input type="submit" name="submit" value="确认添加">
</form>

	</div><!--END container-->
</body>
	 <script src="/Public/js/jquery.min.js"></script>
    <script src="/Public/js/bootstrap.min.js"></script>
</html>