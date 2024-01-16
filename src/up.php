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
        $number='';
        $pdo=new PDO('mysql:host=mysql220.phy.lolipop.lan;dbname=LAA1517812-final;charset=utf8','LAA1517812', 'Pass0404');
        $sql=$pdo->query('select * from title');
        echo '<form action="up-next.php" method="post">';
        foreach($sql as $row){
            $number=$row['titleId'];
            echo '<input type="radio" name="number" value="',$number,'">',$row['titleName'],'<br>';
        }
        echo '<button type="submit" name="action" value="send">更新</button>';
        echo '</form>';
    ?>
    <button onclick="location='list.php'">戻る</button>
</body>
</html>