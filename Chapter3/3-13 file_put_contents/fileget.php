<?php

$file_path='C:\xampp\htdocs\php\php-2024\Chapter3\3-13 file_put_contents\temp\test.txt';

$info = file_get_contents($file_path); //ファイルの中身をRAMに読み込む

$info .="ここが追記されるんだにゃん！";

file_put_contents($file_path, $info);

readfile($file_path);

/*
readfile('C:\xampp\htdocs\php\php-2024\Chapter3\3-13 file_put_contents\temp\test.txt');
//ファイルの中身をRAMに読み込んで、即座に吐き出させる
*/

?>