<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <link rel='stylesheet' href='style.css' />
    <title>データの追加完了</title>
  </head>
  <body>

<?php
# 送信されたデータの取得
$varcharA = $_POST['varcharA']; # 学生番号
$第1回 = $_POST['第1回'];         # 第1回
$第2回 = $_POST['第2回'];         # 第2回
$第3回 = $_POST['第3回'];         # 第3回
$第4回 = $_POST['第4回'];         # 第4回
$第5回 = $_POST['第5回'];         # 第5回
$第6回 = $_POST['第6回'];         # 第6回
$第7回 = $_POST['第7回'];         # 第7回
$第8回 = $_POST['第8回'];         # 第8回
$第9回 = $_POST['第9回'];         # 第9回
$第10回 = $_POST['第10回'];         # 第10回
$第11回 = $_POST['第11回'];         # 第11回
$第12回 = $_POST['第12回'];         # 第12回

require 'db.php'; # 接続
$sql = 'insert into table1 (varcharA, 第1回, 第2回, 第3回, 第4回, 第5回, 第6回, 第7回, 第8回, 第9回, 第10回, 第11回, 第12回) values (:varcharA, :第1回, :第2回, :第3回, :第4回, :第5回, :第6回, :第7回, :第8回, :第9回, :第10回, :第11回, :第12回)';
$prepare = $db->prepare($sql); # 準備

$prepare->bindValue(':varcharA', $varcharA, PDO::PARAM_STR); # 埋め込み1
$prepare->bindValue(':第1回', $第1回, PDO::PARAM_STR);         # 埋め込み2
$prepare->bindValue(':第2回', $第2回, PDO::PARAM_STR);         # 埋め込み3
$prepare->bindValue(':第3回', $第3回, PDO::PARAM_STR);         # 埋め込み4
$prepare->bindValue(':第4回', $第4回, PDO::PARAM_STR);         # 埋め込み5
$prepare->bindValue(':第5回', $第5回, PDO::PARAM_STR);         # 埋め込み6
$prepare->bindValue(':第6回', $第6回, PDO::PARAM_STR);         # 埋め込み7
$prepare->bindValue(':第7回', $第7回, PDO::PARAM_STR);         # 埋め込み8
$prepare->bindValue(':第8回', $第8回, PDO::PARAM_STR);         # 埋め込み9
$prepare->bindValue(':第9回', $第9回, PDO::PARAM_STR);         # 埋め込み10
$prepare->bindValue(':第10回', $第10回, PDO::PARAM_STR);         # 埋め込み11
$prepare->bindValue(':第11回', $第11回, PDO::PARAM_STR);         # 埋め込み12
$prepare->bindValue(':第12回', $第12回, PDO::PARAM_STR);         # 埋め込み13

$prepare->execute(); # 実行
?>

    <p><a href="show-all2.php">確認</a></p>
  </body>
</html>