<?php
$total = 10;
for ($i = 0; $i <= $total; $i++) {
    // 進行度を計算する
    $progress = ($i / $total) * 100;

    // 進行状況を新しい行に表示する
    echo "進行中: " . $i . " / " . $total . " (" . floor($progress) . "%)\n";

    // 何かしらの処理時間を想定して1秒待つ
    sleep(1);
}
echo "処理完了！\n";
?>
