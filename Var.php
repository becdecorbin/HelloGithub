<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>变量转型</title>
	</head>
	<body>
		<?php
	$var="3.1111这是一个字符串";
	echo "\$var开始是:$var";
	echo "<p>";
	//settype($var, "array");
	echo "转意为字符串后是:";
	echo (array)$var;
	echo "<p>";

	echo "转意为整形后是:";
	echo (integer)$var;
	echo "<p>";

	echo "转意为浮点后是:";
	echo (float)$var;
	echo "<p>";
	echo "转意为布尔后是:";
	echo (bool)$var;
	echo "<p>";
?>


	</body>
</html>
