<?php
$s = "";
$result = "";
if (isset($_POST["send"])) {
	$s = $_POST["courses"];
	switch($s) {
	case 1:
		$result = "程式設計";
		break;
	case 2:
		$result = "網頁設計";
		break;
	case 3:
		$result = "手機程式設計";
		break;
	case 4:
		$result = "資料庫系統";
		break;
	}
}
?>
<!DOCTYPE html>
<html lang="zh-TW ">
<head>
    <meta charset="utf-8"/>
    <title>Ch6_3_4</title>
</head>
<body>
<form method = "post" action = "">
	<div>
	<label for = "courses">選擇課程</label>
	<select name = "courses" id = "courses" size = "3">
		<option value = "1">程式設計</option>
		<option value = "2">網頁設計</option>
		<option value = "3">手機程式設計</option>
		<option value = "4">資料庫系統</option>
	</select>
	</div><br/>
	<input type = "submit" name = "send" value = "送出">
</form><hr/>
<?php echo $result ?>
</body>
</html>
