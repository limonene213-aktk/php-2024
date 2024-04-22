<?php

//メモできます
//ここでは、Datetimeクラスを使ってtodayインスタンスを利用しています。

$today = new Datetime();

//インスタンスのメソッドを呼び出して、printを使って情報表示
//UNIXタイムを使っていて、現在時刻には変換していませんよ

print('現在は'. $today->format('G : i :s').'です。');

?>