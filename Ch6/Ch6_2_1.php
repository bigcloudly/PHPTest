<!DOCTYPE html>
<html lang="zh-TW ">
<head>
    <meta charset="utf-8"/>
    <title>Ch6_2_1</title>
</head>
<body>
<form method = "post" action = "Ch6_2_1.php">
	<p>使用者名稱：
	<input type = "text" name = "user" id = "user" /></p>
	<p>使用者密碼：
	<input type = "password" name = "pass" id = "pass" /></p>
	<input type = "submit" name = "send" value = "登入" />
	<input type = "reset" name = "send" value = "重設" />
</form><hr/>
<?php
if (isset($_POST["send"])) {
	$user = $_POST["user"];
	$pass = $_POST["pass"];
	echo "使用者名稱：" . $user . "<br/>";
	echo "使用者密碼：" . $pass . "<br/>";
}
else {
	print("請輸入登入資料...");
}
?>
</body>
</html>
