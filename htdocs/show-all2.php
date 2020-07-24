<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <link rel='stylesheet' href='style.css' />
    <title>全データ表示（その2）</title>
  </head>
  <body>

<table>
  <caption>全データ</caption>
  <tr>
    <th>ID</th>
    <th>学生番号</th>
    <th>第1回</th>
    <th>第2回</th>
    <th>第3回</th>
    <th>第4回</th>
    <th>第5回</th>
    <th>第6回</th>
    <th>第7回</th>
    <th>第8回</th>
    <th>第9回</th>
    <th>第10回</th>
    <th>第11回</th>
    <th>第12回</th>
  </tr>
<?php
require 'db.php';                               # 接続
$sql = 'SELECT * FROM table1';                  # SQL文
$prepare = $db->prepare($sql);                  # 準備
$prepare->execute();                            # 実行
$result = $prepare->fetchAll(PDO::FETCH_ASSOC); # 結果の取得

foreach ($result as $row) {
  $id       = h($row['id']);
  $varcharA = h($row['varcharA']);
  $第1回     = h($row['第1回']);
  $第2回     = h($row['第2回']);
  $第3回     = h($row['第3回']);
  $第4回     = h($row['第4回']);
  $第5回     = h($row['第5回']);
  $第6回     = h($row['第6回']);
  $第7回     = h($row['第7回']);
  $第8回     = h($row['第8回']);
  $第9回     = h($row['第9回']);
  $第10回     = h($row['第10回']);
  $第11回     = h($row['第11回']);
  $第12回     = h($row['第12回']);
  echo '<tr>' .
    "<td>{$id}</td>".
    "<td>{$varcharA}</td>".
    "<td>{$第1回}</td>".
    "<td>{$第2回}</td>".
    "<td>{$第3回}</td>".
    "<td>{$第4回}</td>".
    "<td>{$第5回}</td>".
    "<td>{$第6回}</td>".
    "<td>{$第7回}</td>".
    "<td>{$第8回}</td>".
    "<td>{$第9回}</td>".
    "<td>{$第10回}</td>".
    "<td>{$第11回}</td>".
    "<td>{$第12回}</td>".
    '</tr>';
}
?>
</table>

  </body>
</html>