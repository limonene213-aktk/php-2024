<?php

/*

以下,

{
    "name":"John",
    "age":30,
    "city":"New York"
}

と同じ内容の連想配列を扱い、JSONと連想配列の相互変換を学びます

*/

$person = array(
    "name" => "John",
    "age" => 30,
    "city" => "New York"
);

$jsonString = json_encode($person);
//echo $jsonString;

$decodedArray = json_decode($jsonString, true); // 第2引数が true の場合、連想配列に変換されます

print "追加前の状態："."\n";
print_r($decodedArray); // 連想配列を出力

$decodedArray["趣味"] = "旅行";

print "\n"."追加した後の状態："."\n";
print_r($decodedArray); // 連想配列を出力


//print_rはデバッグ用の情報出力で、わかりやすい形式で出力してくれます
//参考：var_dump、var_exportなどほかのデバッグ出力もある！

?>