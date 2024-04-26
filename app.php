<?php
$total = 10;
for ($i = 0; $i <= $total; $i++) {

    // 進行度を計算する
    $progress = ($i / $total) * 100;

    // キャリッジリターンで行の先頭に戻り、進行状況を上書き表示する
    print "\r進行中: " . $i . " / " . $total . " (" . floor($progress) . "%)";
    // 何かしらの処理時間を想定して1秒待つ
    sleep(1);
}

echo "\n処理完了！\n";
?>