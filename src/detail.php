<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>ガンダム作品一覧表示システム</title>
</head>
<body>
    <?php
    $pdo=new PDO($connect, USER, PASS);
    $sql=$pdo->prepare('select * from product where titleId=?');
    $sql->execute([$_GET['titleId']]);
    echo '<h1>',$row['titleName'],'</h1>';
    ?>
    <button onclick="location='home.php'">ホームに戻る</button>
</body>
</html>