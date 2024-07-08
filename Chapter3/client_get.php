<?php
//相手の「住所（＝IP）」を書く
$url = 'http://192.168.10.6:8000';

//受け取ったお返事を入れる変数を設定する
$response = file_get_contents($url); //file_get_contents関数は「この住所からお返事をもらう」というシンプルな関数

//受け取ったことを通知する
echo "GETリクエストのレスポンス内容はこちらです：".$response; //受け取ったお返事の内容をechoする

?>