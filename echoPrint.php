<!DOCTYPE html>
<html lang="zh-TW ">
<head>
    <meta charset="utf-8"/>
    <title>EchoPrint</title>
</head>
<body>
<?php
	$name1 = "姓名1";
	$name2 = "姓名2";
	echo("echo有加()<br/>");
	echo "echo沒有加()<br/>";
	print("print有加()<br/>");
	print "print沒有加()<br/>";

	print $name1 . $name2;
?>
</body>
</html>
