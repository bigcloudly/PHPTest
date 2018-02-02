<!DOCTYPE html>
<html lang="zh-TW ">
<head>
    <meta charset="utf-8"/>
    <title>Ch1_4_3.php</title>
</head>
<body>
<?php
	$begin = 12;
	$end = 18;
	for ($i = $begin; $i <=$end; $i += 3) {
?>
	<p style="font-size:<?php echo $i;?>pt">
字型漸變的PHP程式
<?php
	print "</p>";
	} ?>
</body>
</html>
