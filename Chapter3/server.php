<?php

//SERVERグローバル変数の中のリクエストメソッドがGETである場合に処理開始
if($_SERVER['REQUEST_METHOD'] === 'GET'
){
    //サーバー側がクライアントからGETリクエストを受け取ったことを通知
    echo "サーバー側でGETリクエストを受信しました！";

    //クライアント側にお返事を書く
    file_put_contents('php://stdout',"GETリクエストを受け取ったぽよ～。");
}
?>