<!DOCTYPE html>
<html lang="zh-TW ">
<head>
    <meta charset="utf-8"/>
    <title>Ch4_3_1</title>
</head>
<body>
<?php
$arr = array("color"=>"黑色", "name"=>"王小明", "shape"=>"三角形", 100);

foreach($arr as $key=>$value) {
	echo "$key=>$value, ";
}
print "<br/>";
if (!isset($arr["type"])){
	$arr["type"] = "PHP";
}
print "新增type元素值" . $arr["type"] . "成功!<br/>";

foreach ($arr as $key=>$value){
	echo "$key=>$value, ";
}
print "<br/>";
if (isset($arr["type"])){
	unset($arr["type"]);
}
print "刪除type元素值" . $arr["type"] . "成功!<br/>";
 
foreach ($arr as $key=>$value){
	echo "$key=>$value, ";
}
?>
</body>
</html>
