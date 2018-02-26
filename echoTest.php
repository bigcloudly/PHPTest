<?php
echo "Hello World<br/>";
$stamps = time();
echo "現在距離1970年01月01日共計", $stamps, "秒<br/>";
$today = getdate();
$year = $today["year"];
$month = $today["mon"];
$day = $today["mday"];
$hour = $today["hours"];
$minute = $today["minutes"];
$second = $today["seconds"];

echo $year, "年", $month, "月", $day, "日", $hour, "時", $minute, "分", $second, "秒";
?>
