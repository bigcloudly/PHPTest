<?php
$result = "";
if (isset($_POST["send"])) {
	$selected = $_POST["langs"];
	foreach ($selected as $item){
		switch ($item) {
		case 1: 
			$result .= "C/C++語言 |"; 
			break;
		case 2:
			$result .= "Java語言 |";
			break;
		case 3:
			$result .= "C#語言 |";
			break;
		case 4:
			$result .= "Visual Basic語言 |";
			break;
		}
	}
}
?>
<!DOCTYPE html>
<html lang="zh-TW ">
<head>
    <meta charset="utf-8"/>
    <title>Ch6_3_5</title>
</head>
<body>
<form method = "post" action = "">
	<div>
	<label for = "langs">選擇程式語言：</label>
	<select name = "langs[]" id = "langs" multiple>
		<option value = "1">C/C++語言</option>
		<option value = "2">Java語言</option>
		<option value = "3">C#語言</option>
		<option value = "4">Visual Basic語言</option>
	</select><br/>
	<input type = "submit" name = "send" value = "送出">
	</div>
</form><hr/>
<?php echo $result ?>
</body>
</html>
