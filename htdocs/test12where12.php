<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <link rel='stylesheet' href='style.css' />
    <title>第12回</title>
  </head>
  <body>

<?php
# 送信されたデータの取得
$idn = $_POST['id'];
$namen = $_POST['name'];
$ana = $_POST['l'];         # 第1回
?>

<table border='1'>
  <caption>全データ</caption>
  <tr>
    <th>ID</th>
    <th>学生番号</th>
    <th>第12回</th>
  </tr>
<?php
require 'db.php';                               # 接続
$sql = 'SELECT * FROM table1';                  # SQL文
$prepare = $db->prepare($sql);                  # 準備
$prepare->execute();                            # 実行
$result = $prepare->fetchAll(PDO::FETCH_ASSOC); # 結果の取得
$update = "UPDATE table1 SET l = :a WHERE id = :id";# UPDATE文を変数に格納
$stmt2 = $db->prepare($update);                 # 更新する値と該当のIDを配列に格納する
$params2 = array(':a' => $_POST['l'], ':id' =>$_POST['id'] ); # 更新する値と該当のIDが入った変数をexecuteにセットしてSQLを実行
$stmt2->execute($params2);
foreach ($result as $row) {
$id       = h($row['id']);
$name = h($row['name']);
$a     = h($row['l']);
}
?>
    <td><?=$idn?></td>
    <td><?=$namen?></td>
    <td><?=$ana?></td>
    <?='</tr>';?>
</table>
<p><a href="test12where.php">前のページに戻る</a></p>
  </body>
</html>