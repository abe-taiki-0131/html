<?php

$user = 'root';
$pass = '';
// 名前とパスワードが入力されているとき
if ( isset($_GET['name']) && isset($_GET['password']) ) {
    
    try {

        // データベースに接続
        $pdo = new PDO(
            'mysql:dbname=login_test;host=localhost;charset=utf8mb4',
            'root',
            '');
        // echo "データベースへの接続成功";

        $stmt = $pdo->query('SELECT * FROM account');

        foreach ($stmt as $row) {
            // print_r($row);
            if ($row['name'] == $_GET['name'] && $row['password'] == $_GET['password']) {
                header('Location: test2.php?login=success');
            } else {
                header('Location: test2.php?login=failure');
            }
        }

    } catch (PDOException $e) {
        header('Content-Type: text/plain; charset=UTF-8', true, 500);
        exit($e->getMessage()); 
    }
}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="get">
        <label for="name">・名前 <input type="text" name="name" id="name" style="margin-left: 48px;" required></label>
        <br>
        <label for="password">・パスワード <input type="password" name="password" id="password" required></label>
        <br>
        <input type="submit" value="ログイン" name="login" style="margin-top: 10px;">
    </form>
</body>
</html>