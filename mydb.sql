# (A1)mydbというデータベースが既にあるなら削除する（危険）．
drop database if exists mydb;

# (A2)mydbというデータベースを作る．
create database mydb charset=utf8mb4;

# (A3)ユーザ名testuser，パスワードpassでmydbにアクセスできるようにする．
grant all on mydb.* to testuser@localhost identified by 'pass';

# (A4)mydbを使う．
use mydb;

# (A5)table1というテーブルが既にあるなら削除する（危険）．
drop table if exists table1;

create table table1 (
  id int primary key auto_increment, # ここはいつも同じ
  name varchar(40) not null,
  a varchar(40) not null,
  b varchar(40) not null,
  c varchar(40) not null,
  d varchar(40) not null,
  e varchar(40) not null,
  f varchar(40) not null,
  g varchar(40) not null,
  h varchar(40) not null,
  i varchar(40) not null,
  j varchar(40) not null,
  k varchar(40) not null,
  l varchar(40) not null# 最後にはカンマがないことに注意．
);

# (C1)データを作成する．
insert into table1 (id, name, a, b, c, d, e, f, g, h, i, j, k, l) values
(1, '2020001', '提出済み', '提出済み', '提出済み', '提出済み', '提出済み', '提出済み', '提出済み', '提出済み', '提出済み', '提出済み', '提出済み', '提出済み'),
(2, '2020002', '提出済み', '提出済み', '提出済み', '提出済み', '提出済み', '未提出', '未提出', '未提出', '未提出', '未提出', '未提出', '未提出'),
(3, '2020003', '未提出', '未提出', '未提出', '未提出', '未提出', '未提出', '未提出', '未提出', '未提出', '未提出', '未提出', '未提出');