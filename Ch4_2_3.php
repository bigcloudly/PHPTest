<!DOCTYPE html>
<html lang="zh-TW ">
<head>
    <meta charset="utf-8"/>
    <title>Ch4_2_1</title>
</head>
<body>
<?php
$total = 0;
$animal[] = "dog";
$animal[] = "cat";
$animal[] = "tiger";
$grades = array(78, 55, 89, 93);
for ($i = 0; $i < 4; $i++){
	$total += $grades[$i];
	echo "$i ==> $total<br/>";
}
foreach ($animal as $element){
	echo "$element<br/>";
}

?>
</body>
</html>
