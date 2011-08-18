<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Thief</title>
	</head>
	<body>
<?php
	header("content-Type: text/html; charset=gbk");
	echo "欢迎使用苏帅提供的小蜥蜴";

?>
		<form action="thief.php" method="post" accept-charset="utf-8" style="margin: 200px 300px">
			<label for="code">请输入股票代码</label><input type="text" name="code" value="" id="code">
			
			<input type="submit" name="查询" value="查询">
			
		</form>
	</body>
</html>
