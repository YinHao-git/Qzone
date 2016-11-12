<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="cn">
<head>
	<meta charset="UTF-8">
	<title>AJAX</title>
    <script src="/s53/web/Public/js/jquery.min.js"></script>
    <style>
    #box{padding:20px;background-color:#feeeed;}
    </style>
</head>
<body>
	<h1>AJAX</h1>
	<button>加载</button>
	<div id="box"></div>
	<script>
		$(function(){
			$('button').click(function(){
				// alert(111);
				// $.ajax({
				// 	type:'get',
				// 	url:"<?php echo U('Stu/doAjax');?>",
				// 	dataType:'json',
				// 	success:function(data){
				// 		console.log(data);
				// 	}
				// })
			$.ajax({
				url:"<?php echo U('User/index');?>",
				success:function(data){
					$('#box').html(data);
				}
			})

			})
		})
	</script>
</body>
</html>