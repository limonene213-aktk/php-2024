<?php
// 名前がPOSTされているかチェックする
/*
//issetは「値が存在するかしないか？」をチェックして、ブーリアンで返答してくれる関数
if (isset($_POST['user_name'])) {
    // 名前を取得する
    $name = htmlspecialchars($_POST['user_name'], ENT_QUOTES, 'UTF-8');
} else {
    $name = "エラー";
}
*/
if ( isset($_POST['user_name']) && isset($_POST['email']) ) {
    // 名前を取得する
    $name = htmlspecialchars($_POST['user_name'], ENT_QUOTES, 'UTF-8');
    // メールアドレスを取得する
    $email = $_POST['email'];
} else {
    $name = "エラー";
    $email = "エラー";
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHPでの処理結果</title>
</head>
<body>
    <h1>結果表示</h1>
    <p><?php echo "こんにちは、" . $name . "さん！"; ?></p>
    <p><?php echo "あなたのメールアドレスは" . $email . "です"; ?></p>
    <a href="index.html">戻る</a>
</body>
</html>
