<?php

print "文字列"."\n";

print 20;

print"\n";

$array = array(0,1,2,3,4,5,6 ); //配列は文字列ではない

print($array); //的外れなやつ

print"\n";

print_r($array);

print"\n";

var_dump($array);

print"\n";

$string = "12345";

print $string;

print"\n";

$string2 = mb_convert_kana($string, 'n', 'UTF-8');

print $string2;

print"\n";

$int = 12345;

print $int;

print"\n";

print_r($int);

print"\n";

var_dump($int);

print"\n";

$moji = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxwz0123456789";

var_dump($moji);

print"\n";

$moji2 = mb_convert_kana($moji, 'n', 'UTF-8');

print $moji2;

print"\n";

print_r($moji2);

print"\n";

var_dump($moji2);

print"\n";

$moji3 = "祇園精舎の鐘の声諸行無常の響きあり";

var_dump($moji3);

print"\n";

$moji4 = mb_convert_kana($moji3, 'n', 'UTF-8');

print $moji4;

print"\n";

print "平家物語の冒頭：".$moji4;

print"\n";

print_r("平家物語の冒頭：".$moji4);

print"\n";

var_dump("平家物語の冒頭：".$moji4);


print"\n";

print_r($moji4);

print"\n";

var_dump($moji4);
?>