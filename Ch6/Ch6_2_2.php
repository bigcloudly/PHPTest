<!DOCTYPE html>
<html lang="zh-TW ">
<head>
    <meta charset="utf-8"/>
    <title>Ch6_2_2</title>
</head>
<body>
<form method = "post" action = "">
	<p>回應：
	<textarea name = "comment" id = "comment" rows = "5" cols = "30">
</textarea></p>
	<input type = "submit" name = "send" value = "送出" />
</form><hr/>
<?php
$result = "";
$result1 = "";
if (isset($_POST["send"])) {
	$resust = $_POST["comments"];
	echo "留言1：" . $result;
	$result1 = nl2br($result);
	echo "<hr/>留言2：" . $result;
}
?>
</body>
</html>
