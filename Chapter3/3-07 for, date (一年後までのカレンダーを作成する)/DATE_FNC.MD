```php
<?php

for($i=1; $i<=365; $i++){
    $day = date('n/j(D)',strtotime('+'.$i.'day'));

 print($day."\n");
}

?>
```
# date関数の使い方
- `date(第１引数, 第２引数)`という形で使う

## date関数で使う第1引数の意味
- 日付や時刻の表示形式を指定

## date関数で使う第２引数の意味：
- date関数で取得してくるUnixタイムを指定

### strtotime関数
- strtotime関数は"str to time"の意味で、文字列で時間を指示できる関数

例：
```php
strtotime(+1day); <-1日後のタイムスタンプ
strtotime(+2day); <-2日後のタイムスタンプ
strtotime(1988/2/13);<-1988年2月13日のタイムスタンプ
```