<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="cn">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>home user index</h1>
	<hr>
	<table width="800" border="1">
		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>PLACE</th>
		</tr>
		<?php if(is_array($list)): foreach($list as $k=>$vo): ?><tr>
				<td><?php echo ($vo["id"]); ?></td>
				<td><?php echo ($vo["name"]); ?></td>
				<td><?php echo ($vo["place"]); ?></td>
			</tr><?php endforeach; endif; ?>
	</table>
</body>
</html>