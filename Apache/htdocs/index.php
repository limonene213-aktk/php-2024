<!DOCTYPE html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php

$rand = rand(0, 10);

$genshin = array("魈","胡桃","エウルア","アンバー");
?>

<p>あなたが引いたキャラは、</p>
<?php print $genshin[$rand];?>
<p>です</p>

</body>