<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="./css/list.css">
<title>ガンダム作品一覧表示システム</title>
</head>
<body>
    <h1>ガンダム作品一覧</h1>
    <hr>
    <?php
    $pdo=new PDO('mysql:host=mysql220.phy.lolipop.lan;dbname=LAA1517812-final;charset=utf8','LAA1517812', 'Pass0404');
    $sql=$pdo->query('select * from title');
    echo '<table align="center">';
    echo '<tr><th></th><th>放送年</th><th>タイトル</th></tr>';
    foreach($sql as $row){
        $id=$row['titleId'];
        $rink="location.href='detail.php?titleId=".$id. "'";
        echo '<tr>';
        echo '<td>・</td>';
        //echo '<td>',$id,'</td>';
        echo '<td>',$row['age'],'</td>';
        echo '<td>',$row['titleName'],'</td>';
        //echo '<td><button onclick=',$rink,'>',$row['titleName'], '</button></td>';
        echo '</tr>';
    }
    echo '</table><br>';
    ?>
    <!--<button onclick="location='home.php'">ホームに戻る</button>
    <button onclick="location='insert.php'">登録</button>
    <button onclick="location='up.php'">更新</button>
    <button onclick="location='delete.php'">削除</button>-->
    <div class="button_line004">
        <a href="https://aso2201211.pussycat.jp/final/src/home.php">ホームに戻る</a>
    </div>
    <br>
    <div class="button_line004">
        <a href="https://aso2201211.pussycat.jp/final/src/insert.php">登録</a>
    </div>
    <br>
    <div class="button_line004">
        <a href="https://aso2201211.pussycat.jp/final/src/up.php">更新</a>
    </div>
    <br>
    <div class="button_line004">
        <a href="https://aso2201211.pussycat.jp/final/src/delete.php">削除</a>
    </div>
</body>
</html>