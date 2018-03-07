<?php
$error = "";
$result = "";
$user = "";
$showform = true;
if (isset($_POST["send"])) {
	$user = $_POST["user"];
	$pass = $_POST["pass"];
	$pass2 = $_POST["pass2"];
	if (empty($user)) {
		$error = "帳號欄位空白<br/>";
	} else {
		if ($pass != $pass2) {
			$error = "密碼輸入不相同<br/>";
		} else {
			$showform = false;
			$result .= "帳號：" . $user . "<br/>";
			$result .= "密碼：" . $pass . "<br/>";
		}
	}
}
?>
<!DOCTYPE html>
<html lang="zh-TW ">
<head>
    <meta charset="utf-8"/>
    <title>Ch6_4</title>
</head>
<body>
<?php if ($showform) { ?>
<div style = "color: red"><?php echo $error ?></div>
<form method = "post" action = "">
	<p>
	<label for = "user">使用者帳號：</label>
	<input type = "text" name = "user" id = "user" value = "<?php echo $user ?>"/>
	</p>
	<p>
	<label for = "pass">使用者密碼：</label>
	<input type = "password" name = "pass" id = "pass" />
	</p>
	<p>
	<label for = "pass2">再輸入密碼：</label>
	<input type = "password" name = "pass2" id = "pass2" />
	</p>
	<input type = "submit" name = "send" value = "註冊使用者" />
</form>
<?php
} else echo $result;
?>
</body>
</html>
