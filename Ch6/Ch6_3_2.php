<?php
$type = "";
$result = "";
if (isset($_POST["send"])) {
	$accept = $_POST["accept"];
	if (isset($_POST["orignal"])) $type .= "原味 |";
	if (isset($_POST["beef"])) $type .= "牛肉 |";
	if (isset($_POST["seafood"])) $type .= "海鮮 |";
	$result = $accept . "/" . $type;
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
	<label for = "accept">我同意授權</label>
	<input type = "checkbox" name = "accept" id = "accept" value = "yes" checked />
	</div>
	<div>
	<div>選擇訂購的披薩種類；</div>
	<input type = "checkbox" name = "orignal" id = "orignal" value = "1" checked />
	<label for = "orignal">原味</label>
	<input type = "checkbox" name = "beef" id = "beef" value = "2" />
	<label for = "beef">牛肉</label>
	<input type = "checkbox" name = "seafood" id = "seafood" value = "3" />
	<label for = "seafood">海鮮</label>
	</div><br/>
	<input type = "submit" name = "send" value = "選擇" />
</form><hr/>
<?php echo $result ?>
</body>
</html>
