<?php
$total = 10;
for($i = 0; $i <= $total; $i++){
    $progress = ($i /$total)*100;
    echo"\r進行中:". $i ."/". $total."(".floor($progress)."%)";
    sleep(1);}
    echo "\n処理が完了しました\n";
?>