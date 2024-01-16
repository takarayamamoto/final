<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ガンダム作品一覧表示システム-更新</title>
</head>
<body>
<h2>作品を更新</h2>
<hr>
<?php
    $age=$titleName=$story='';
    $pdo=new PDO('mysql:host=mysql220.phy.lolipop.lan;dbname=LAA1517812-final;charset=utf8','LAA1517812', 'Pass0404');
    $sql=$pdo->prepare('select * from title where titleId=?');
    $sql->execute([$_POST['number']]);
    echo '<form action="up-fin.php" method="post">';
    foreach($sql as $row){
        $age=$row['age'];
        $titleName=$row['titleName'];
        $story=$row['story'];
        echo '放送年：<input type="text" name="age" value="',$age,'"><br>';
        echo 'タイトル名：<input type="text" name="titleName" value="',$titleName,'"><br>';
        echo 'あらすじ：<input type="text" name="story" value="',$story,'"><br>';
    }
    echo '<button type="submit" name="titleId" value="',$_POST['number'],'">更新</button>';
?>
    <button onclick="location='up.php'">戻る</button>
</form>
</body>
</html>