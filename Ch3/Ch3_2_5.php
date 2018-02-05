<!DOCTYPE html>
<html lang="zh-TW ">
<head>
    <meta charset="utf-8"/>
    <title>Ch3_2_5</title>
</head>
<body>
<?php
$hour = date(H);
$min = date(i);
$second = date(s);
print "現在時間為： " . $hour . " : " . $min . " : " . $second . "<br/>";
$str = ($hour > 12) ? "PM" : "AM";
$hour = ($hour > 12) ? $hour - 12 : $hour;
print "現在時間為： " . $str . $hour . " : " . $min . " : " . $second . "<br/>";
?>
</body>
</html>
