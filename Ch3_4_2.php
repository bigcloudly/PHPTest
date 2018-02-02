<!DOCTYPE html>
<html lang="zh-TW ">
<head>
    <meta charset="utf-8"/>
    <title>3_4_2</title>
</head>
<body>
<table border = "1">
<?php
print "<tr><td>*</td>";
for ($i = 1; $i <= 9; $i++){
	print "<td><b>" . $i . "</b></td>";
}
print "</tr>";
for ($i = 1; $i <= 9; $i++){
	print "<tr><td><b>" . $i . "</b></td>";
	for ($j = 1; $j <= 9; $j++){
		print "<td>" . $i . " * " . $j . " = " . $i * $j . "</td>";
	}
	print "</tr>";
}
?>
</table>
</body>
</html>
