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

echo "最初の配列内容："."\n";

$person = array(
    "name" => "John",
    "age" => 30,
    "city" => "New York"
);

print_r($person);
print"\n";

$jsonString = json_encode($person, JSON_UNESCAPED_UNICODE);

echo "JSON化したあとの内容".$jsonString."\n";

echo "いまからこれをsample.jsonファイルとして保存します"."\n";

//追加（jsonのファイル保存）
file_put_contents('C:\xampp\htdocs\php\php-2024\Chapter3\3-16 JSON\sample.json', $jsonString);

$decodedArray = json_decode($jsonString, true); // 第2引数が true の場合、連想配列に変換されます

echo"\n"."ここでJSONから配列に変換しています"."\n";

print "追加前の状態："."\n";
print_r($decodedArray); // 連想配列を出力

$decodedArray["趣味"] = "旅行";

print "\n"."追加した後の状態："."\n";
print_r($decodedArray); // 連想配列を出力

//お試し
file_put_contents('C:\xampp\htdocs\php\php-2024\Chapter3\3-16 JSON\sample.txt',$decodedArray);


//print_rはデバッグ用の情報出力で、わかりやすい形式で出力してくれます
//参考：var_dump、var_exportなどほかのデバッグ出力もある！

?>