<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ガンダム作品一覧表示システム-登録</title>
</head>
<body>
    <?php
        $pdo=new PDO('mysql:host=mysql220.phy.lolipop.lan;dbname=LAA1517812-final;charset=utf8','LAA1517812', 'Pass0404');
        $sql=$pdo->prepare('delete from title where titleId=?');
        $sql->execute([$_POST['number']]);
    ?>
    <button onclick="location='home.php'">ホームに戻る</button>
</body>
</html>