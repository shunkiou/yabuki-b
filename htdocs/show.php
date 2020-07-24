<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <link rel='stylesheet' href='style.css' />
    <title>特定のデータの表示</title>
  </head>
  <body>

<?php
$id = $_GET['id']; # URLからIDを取得

require 'db.php';                                # 接続
$sql = 'SELECT * FROM table1 where id=:id';      # SQL文
$prepare = $db->prepare($sql);                   # 準備
$prepare->bindValue(':id', $id, PDO::PARAM_STR); # 番号の埋め込み
$prepare->execute();                             # 実行
$result = $prepare->fetchAll(PDO::FETCH_ASSOC);  # 結果の取得

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
  echo '<table>' .
    "<tr><th>ID</th><td>{$id}</td></tr>".
    "<tr><th>学生番号</th><td>{$varcharA}</td></tr>".
    "<tr><th>第1回</th><td>{$第1回}</td></tr>".
    "<tr><th>第2回</th><td>{$第2回}</td></tr>".
    "<tr><th>第3回</th><td>{$第3回}</td></tr>".
    "<tr><th>第4回</th><td>{$第4回}</td></tr>".
    "<tr><th>第5回</th><td>{$第5回}</td></tr>".
    "<tr><th>第6回</th><td>{$第6回}</td></tr>".
    "<tr><th>第7回</th><td>{$第7回}</td></tr>".
    "<tr><th>第8回</th><td>{$第8回}</td></tr>".
    "<tr><th>第9回</th><td>{$第9回}</td></tr>".
    "<tr><th>第10回</th><td>{$第10回}</td></tr>".
    "<tr><th>第11回</th><td>{$第11回}</td></tr>".
    "<tr><th>第12回</th><td>{$第12回}</td></tr>".
    '</table>';
}
?>

  </body>
</html>