<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <link rel='stylesheet' href='style.css' />
    <title>全データ表示（その1）</title>
  </head>
  <body>
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
  echo "{$id}, {$varcharA}, {$第1回}, {$第2回}, {$第3回}, {$第4回}, {$第5回}, {$第6回}, {$第7回}, {$第8回}, {$第9回}, {$第10回}, {$第11回}, {$第12回}<br/>";
}
?>
  </body>
</html>