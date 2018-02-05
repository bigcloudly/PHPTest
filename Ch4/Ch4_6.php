<!DOCTYPE html>
<html lang="zh-TW ">
<head>
    <meta charset="utf-8"/>
    <title>4_6</title>
</head>
<body>
<?php
$animal[0] = "狗";
$animal[1] = "貓";
$animal[2] = "魚";
$animal[3] = "老鼠";

$grades = array(78, 55, 89, 93);
print_r($animals);
echo "<br/>";
print_r($grades);
echo "<br/>";
$searchkey = array_search('魚', $animal);
print "搜尋魚 = " . $searchkey . "<br/>";
$searchkey = array_search('狗', $animal);
print "搜尋狗 = " . $searchkey . "<br/>";
sort($grades);
foreach ($grades as $element){
	echo "$grades => $element, ";
}
?>
</body>
</html>
