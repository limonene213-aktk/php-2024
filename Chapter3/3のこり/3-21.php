<?php

$string ="111-1111";

$string = mb_convert_kana($string, 'a', 'UTF-8');

if(preg_match("/\A\d{3}[-]\d{4}\z/", $string)){  //第一引数が正規表現、第二が検証する文字列
    print("郵便番号：〒".$string);
}else{
    print("郵便番号の形式が正しくないです");
}

//^[a-zA-Z0-9_+-]+(.[a-zA-Z0-9_+-]+)*@([a-zA-Z0-9][a-zA-Z0-9-]*[a-zA-Z0-9]*\.)+[a-zA-Z]{2,}$ 

print"\n";

$email ="hoge@hoge.io";

$email = mb_convert_kana($email, 'a', 'UTF-8');

if(preg_match("/^[a-zA-Z0-9_+-]+(.[a-zA-Z0-9_+-]+)*@([a-zA-Z0-9][a-zA-Z0-9-]*[a-zA-Z0-9]*\.)+[a-zA-Z]{2,}$/", $email)){ 
    print("メールアドレス：".$email);
}else{
    print("メールアドレスの形式が正しくないです");
}

//\d{3}[-]\d{4}[-]\d{4}

?>