<?php
$result = "";
$result1 = "";
if (isset($_POST["send"])) {
	$s = (int) $_POST["steak"];
	switch($s){
	case 3:
		$result = "三分";
		break;
	case 5:
		$result = "五分";
		break;
	case 7:
		$result = "七分";
		break;
	}
	$s1 = (int) $_POST["delivery"];
	switch($s1){
	case 1:
		$result1 = "快遞";
		break;
	case 2:
		$result1 = "自取";
		break;
	case 3:
		$result1 = "郵寄";
		break;
	}
}
?>
<!DOCTYPE html>
<html lang="zh-TW ">
<head>
    <meta charset="utf-8"/>
    <title>Ch6_3_1</title>
</head>
<body>
<form method = "post" action = "">
	<div>
	<div>選擇牛排要幾分熟：</div>
	<input type = "radio" name = "steak" id = "rare" value = "3" checked/ >
	<label for = "rare">三分熟</label>
	<input type = "radio" name = "steak" id = "medium" value = "5" />
	<label for = "medium">五分熟</label>
	<input type = "radio" name = "steak" id = "medwell" value = "7" />
	<label for = "medwell">七分熟</label>
	</div>
	<div>
	<div>送貨方式：</div>
	<input type = "radio" name = "delivery" id = "ups" value = "1" checked />
	<label for = "ups">快遞</label>
	<input type = "radio" name = "delivery" id = "self" value = "2" />
	<label for = "self">自取</label>
	<input type = "radio" name = "delivery" id = "post" value = "3" />
	<label for = "self">郵寄</label>
	</div>
	<input type = "submit" name = "send" value = "確定" />
</form><hr/>
<?php echo $result ?><br/>
<?php echo $result1 ?>
</body>
</html>
