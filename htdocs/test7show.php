<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <link rel='stylesheet' href='style.css' />
    <title>第7回</title>
  </head>
  <body>
<table border='1'>
  <caption>全データ</caption>
  <tr>
    <th>ID</th>
    <th>学生番号</th>
    <th>第7回</th>
  </tr>
<?php
require 'db.php';                               # 接続
$sql = 'SELECT * FROM table1';                  # SQL文
$prepare = $db->prepare($sql);                  # 準備
$prepare->execute();                            # 実行
$result = $prepare->fetchAll(PDO::FETCH_ASSOC); # 結果の取得
?>
<?php
foreach ($result as $row) {
  $id       = h($row['id']);
  $name = h($row['name']);
  $a     = h($row['g']);
echo '<tr>'
?>
    <td><?=$id?></td>
    <td><?=$name?></td>
    <td><?=$a?></td>
    <?='</tr>';
}?>
</table>
<p><a href="member.php">前のページに戻る</a></p>
  </body>
</html>