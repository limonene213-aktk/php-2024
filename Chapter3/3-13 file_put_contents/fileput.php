<?php

$success = file_put_contents('C:\xampp\htdocs\php\php-2024\Chapter3\3-13 file_put_contents\temp\test.txt', '2024-06-24 ホームページをリニューアルしました');
if($success){
    print('ファイルの書き込みに成功しました');
}else{
    print('書き込みに失敗しました・・・にゃーん！');
}

?>