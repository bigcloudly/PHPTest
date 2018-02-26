<?php
echo "Hello World<br/>";
$stamps = time();
echo $stamps, "<br/>";
$today = getdate();
$year = $today["year"];
$month = $today["mon"];
$day = $today["mday"];
$hour = $today["hours"];
$minute = $today["minutes"];
$second = $today["seconds"];

echo $year, "年", $month, "月", $day, "日", $hour, "時", $minute, "分", $second, "秒";
?>
