<!DOCTYPE html>
<html lang="zh-TW ">
<head>
    <meta charset="utf-8"/>
    <title>Ch5_5</title>
<?php include("Myfunc.inc"); ?>
</head>
<body>
<?php require("header.php"); ?>
攝氏32度 = 華氏<?php echo convertTemp(32)?>度<br/>
<?php
$f = convertTemp(100);
print "攝氏100度 = 華氏" . $f . "度<br/>";
?>
</body>
</html>
