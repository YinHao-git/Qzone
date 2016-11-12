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
		
	<form action="<?php echo U('User/save');?>" method="post" class="h3">
		<input type="hidden" name="id" value="<?php echo ($data["id"]); ?>">
		name:
		<input type="text" name="name" value="<?php echo ($data["name"]); ?>" placeholder="请输入用户名">
		place:
		<input type="text" name="place" value="<?php echo ($data["place"]); ?>" placeholder="请输入地址">
		<input type="submit" value="提交修改">
	</form>
 
	</div><!--END container-->
</body>
	 <script src="/Public/js/jquery.min.js"></script>
    <script src="/Public/js/bootstrap.min.js"></script>
</html>