  
<?php
session_start(); // セッションを開始する．
if (!isset($_SESSION['username'])) { // ログインしていないなら，
  header('Location: login.php');     // ログインページへ転送する．
}
$username = $_SESSION['username']; // ユーザ名を思い出す．
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset='utf-8' />
  <link rel='stylesheet' href='style.css' />
  <title>メンバページ</title>
</head>
<body>
<div class="outer">
      <div class="inner">
  <p>提出状況管理システム</p>
  <a href="test1show.php">第1回</a><br>
<a href="test2show.php">第2回</a><br>
<a href="test3show.php">第3回</a><br>
<a href="test4show.php">第4回</a><br>
<a href="test5show.php">第5回</a><br>
<a href="test6show.php">第6回</a><br>
<a href="test7show.php">第7回</a><br>
<a href="test8show.php">第8回</a><br>
<a href="test9show.php">第9回</a><br>
<a href="test10show.php">第10回</a><br>
<a href="test11show.php">第11回</a><br>
<a href="test12show.php">第12回</a><br>
  <p><a href="logout.php">ログアウト</a></p>
  </div>
</div>
</body>
</html>