<?php

//ファイルからJSONの内容を取得してくる
$json = file_get_contents('C:\xampp\htdocs\php\php-2024\Chapter3\3-16 JSON\sample.json');

//print_r($json);
if($json){
    echo "正常にファイルからJSONの内容を取得しました";
}else{
    echo "JSONファイルの読み込み時にエラーが発生しました";
};

//jsonを連想配列に変換
$array = json_decode($json,true); //trueをつけるとarray objectになる

//print_r($array);

//$arrayの内容に追記
$array["趣味"] = "旅行";

print_r($array);

//JSONに直した
$json2 = json_encode($array, JSON_UNESCAPED_UNICODE); //ここをあえてコメントアウトして消してみた

print_r($json2);

file_put_contents('C:\xampp\htdocs\php\php-2024\Chapter3\3-16 JSON\sample-new.json',$json2);

print_r($json2);

?>