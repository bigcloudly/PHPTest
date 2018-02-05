<!DOCTYPE html>
<html lang="zh-TW ">
<head>
    <meta charset="utf-8"/>
    <title>3_2_4</title>
</head>
<body>
<?php
	$grade = 'C';
	print "GPA成績: " . $grade . "<br/>";
	switch ($grade){
	case 'A':
		print "超過80";
		break;
	case 'B':
		print "超過70";
		break;
	case 'C':
		print "超過60";
		break;
	case 'D':
		print "不及格";
		break;
	default:
		print "查無條件";
		break;
	}
?>
</body>
</html>
