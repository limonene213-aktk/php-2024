<?php

//数字かどうかを判断→最初に半角数字に直してチェック

$age = "20";

print("入力内容：".$age. "    ");  //デバッグ

$age2 = mb_convert_kana($age, 'n', 'UTF-8'); //半角数字に修正

var_dump($age2); //デバッグ

print("$age2の変換内容：".$age2."     ");  //デバッグ

if(is_numeric($age2)){ //半角数字かどうかのチェック：ブール値で返ってくる
    print($age2."ちゃいでちゅ");
}else{
    print('数字を入力してね');
}
?>