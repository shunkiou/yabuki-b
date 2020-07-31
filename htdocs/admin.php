
<?php
session_start(); // セッションを開始する．
if (!isset($_SESSION['username'])) { // ログインしていないなら，
  header('Location: login.php');     // ログインページへ転送する．
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset='utf-8' />
  <link rel='stylesheet' href='stylesheet.css' />
  <title>提出状況管理システム</title>
</head>
<body>
<div class="outer">
      <div class="inner">
  <p>提出状況管理システム</p>
  <a href="test1where.php">第1回</a><br>
<a href="test2where.php">第2回</a><br>
<a href="test3where.php">第3回</a><br>
<a href="test4where.php">第4回</a><br>
<a href="test5where.php">第5回</a><br>
<a href="test6where.php">第6回</a><br>
<a href="test7where.php">第7回</a><br>
<a href="test8where.php">第8回</a><br>
<a href="test9where.php">第9回</a><br>
<a href="test10where.php">第10回</a><br>
<a href="test11where.php">第11回</a><br>
<a href="test12where.php">第12回</a><br>
  <p><a href="logout.php">ログアウト</a></p>
</div>
</div>
</body>
</html>