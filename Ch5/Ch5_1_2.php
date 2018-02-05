<!DOCTYPE html>
<html lang="zh-TW ">
<head>
    <meta charset="utf-8"/>
    <title>5_1_2</title>
</head>
<?php
function sumN2N($begin, $end){
	for ($i = $begin; $i <= $end; $i++){
		$total += $i;
	}
	return $total;
}
?>
<body>
<?php
$sum1 = sumN2N(1,100);
$sum2 = sumN2N(1, 10);
?>
<p>從1加到100為：<?php echo $sum1 ?></p>
<p>從1加到10為：<?php echo $sum2 ?></p>
</body>
</html>
