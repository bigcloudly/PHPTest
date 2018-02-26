<!DOCTYPE html>
<html lang="zh-TW ">
<head>
    <meta charset="utf-8"/>
    <title>Ch5_6_5</title>
</head>
<body>
<?php
$str1 = "How To 'Programming' \PHP\ ";
print("測試的字串1: \"" . $str1 . "\"<br/>");
// 在字元前加上反斜線
echo addslashes($str1) . "<br/>";
//刪除字元前的反斜線
echo stripslashes($str1) . "<br/>";
//轉換成HTML符號
$str2 = "if (x < 5 && y >= 8) {\n sum();\n }";
echo nl2br(htmlentities($str2)) . "<br/>";
// 刪除HTML標籤
$str3 = "<table border = 1><tr><td>刪除標籤測試</td></tr></table>";
echo "原始字串： " . $str3 . "<br/>";
echo "轉換後字串： " . strip_tags($str3);

?>
</body>
</html>
