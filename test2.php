<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            text-align: center;
        }
    </style>
</head>
<body>
    <?php if ( isset($_GET['login']) ): ?>
        <?php if( $_GET['login'] == "success" ): ?>
            <h1><?php echo "ログイン成功！"; ?></h1>
        <?php else: ?>
            <h1><?php echo "ログイン失敗..."; ?></h1>
        <?php endif; ?>
    <?php endif; ?>
</body>
</html>