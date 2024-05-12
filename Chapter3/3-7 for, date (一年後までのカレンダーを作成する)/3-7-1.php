<?php

for($i=1; $i<=365; $i++){
    $day = date('n/j(D)',strtotime('+'.$i.'day'));

    //date(第１パラ, 第２パラ)と使う
    //
    //date関数で使う第1パラメータの意味：
    //日付や時刻の表示形式を指定
    //
    //第２パラメータの意味：
    //date関数で取得してくるUnixタイムを指定
    //
    //strtotime関数は"str to time"の意味
    //文字列（≒文）で時間を指示できる関数
    //例：
    //strtotime(+1day); <-1日後のタイムスタンプ
    //strtotime(+2day); <-2日後のタイムスタンプ
    //strtotime(1988/2/13);<-1988年2月13日のタイムスタンプ

 print($day."\n");
}

?>