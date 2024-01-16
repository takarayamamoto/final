<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ガンダム作品一覧表示システム-削除</title>
</head>
<body>
<h2>作品を削除</h2>
<hr>
    <?php
        $number='';
        $pdo=new PDO('mysql:host=mysql220.phy.lolipop.lan;dbname=LAA1517812-final;charset=utf8','LAA1517812', 'Pass0404');
        $sql=$pdo->query('select * from title');
        //echo '<table>';
        //echo '<tr><th>放送年</th><th>タイトル</th></tr>';
        echo '<form action="delete-fin.php" method="post">';
        foreach($sql as $row){
            //echo '<tr>';
            //echo '<td>',$id,'</td>';
            //echo '<td>',$row['age'],'</td>';
            //echo '<td>',$row['titleName'],'</td>';
            //echo '<td><button onclick=',$rink,'>',$row['titleName'], '</button></td>';
            //echo '</tr>';

            $number=$row['titleId'];
            echo '<input type="radio" name="number" value="',$number,'">',$row['titleName'],'<br>';
        }
        echo '<button type="submit" name="action" value="send">削除</button>';
        echo '</form>';
        //echo '</table>';
    ?>
    <button onclick="location='list.php'">戻る</button>
</body>
</html>