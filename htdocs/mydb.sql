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
  varcharA varchar(40) not null,
  第1回 varchar(40) not null,
  第2回 varchar(40) not null,
  第3回 varchar(40) not null,
  第4回 varchar(40) not null,
  第5回 varchar(40) not null,
  第6回 varchar(40) not null,
  第7回 varchar(40) not null,
  第8回 varchar(40) not null,
  第9回 varchar(40) not null,
  第10回 varchar(40) not null,
  第11回 varchar(40) not null,
  第12回 varchar(40) not null# 最後にはカンマがないことに注意．
);

# (C1)データを作成する．
insert into table1 (id, varcharA, 第1回, 第2回, 第3回, 第4回, 第5回, 第6回, 第7回, 第8回, 第9回, 第10回, 第11回, 第12回) values
(1, '2020001',# (A1)mydbというデータベースが既にあるなら削除する（危険）．
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
  varcharA varchar(40) not null,
  第1回 varchar(40) not null,
  第2回 varchar(40) not null,
  第3回 varchar(40) not null,
  第4回 varchar(40) not null,
  第5回 varchar(40) not null,
  第6回 varchar(40) not null,
  第7回 varchar(40) not null,
  第8回 varchar(40) not null,
  第9回 varchar(40) not null,
  第10回 varchar(40) not null,
  第11回 varchar(40) not null,
  第12回 varchar(40) not null# 最後にはカンマがないことに注意．
);

# (C1)データを作成する．
insert into table1 (id, varcharA, 第1回, 第2回, 第3回, 第4回, 第5回, 第6回, 第7回, 第8回, 第9回, 第10回, 第11回, 第12回) values
(1, '2020001', '提出済み', '提出済み', '提出済み', '提出済み', '提出済み', '提出済み', '提出済み', '提出済み', '提出済み', '提出済み', '提出済み', '提出済み'),
(2, '2020002', '提出済み', '提出済み', '提出済み', '提出済み', '提出済み', '未提出', '未提出', '未提出', '未提出', '未提出', '未提出', '未提出'),
(3, '2020003', '未提出', '未提出', '未提出', '未提出', '未提出', '未提出', '未提出', '未提出', '未提出', '未提出', '未提出', '未提出');
