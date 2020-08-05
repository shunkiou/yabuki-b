<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <link rel='stylesheet' href='style.css' />
    <title>第9回</title>
  </head>
  <body>
  <div class="outer">
      <div class="inner">
<table border='1'>
  <caption>全データ</caption>
  <tr>
    <th>ID</th>
    <th>学生番号</th>
    <th>第9回</th>
    <th>変更</th>
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
  $a     = h($row['i']);
echo '<tr>'
?>
    <td><?=$id?></td>
    <td><?=$name?></td>
    <td><?=$a?></td>
    <td>
    <form action="test9where9.php" method="post">
    <input type="hidden" name="id" value="<?=$id?>">
    <input type="hidden" name="name" value="<?=$name?>">
    <input type="radio" name="i" value="提出済み" required>提出済み
    <input type="radio" name="i" value="未提出">未提出
		<input type="submit" value="変更する">


		</form>
    </td>
    <?='</tr>';
}?>
</table>
<p><a href="admin.php">前のページに戻る</a></p>
</div>
</div>
  </body>
</html>