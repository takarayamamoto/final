<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ガンダム作品一覧表示システム-登録</title>
</head>
<body>
<h2>作品を追加</h2>
<hr>
<form action="insert-fin.php" method="post">
    放送年：<input type="text" name="age">
    <br>
    タイトル名：<input type="text" name="titleName">
    <br>
    あらすじ：<input type="text" name="story">
    <br>
    <button type="submit" name="action" value="send">登録</button>
</form>
<button onclick="location='list.php'">戻る</button>
</body>
</html>
