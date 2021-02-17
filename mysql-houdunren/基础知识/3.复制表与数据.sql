USE ame;
DESC class;

-- 根据class表的结构生成test表
CREATE TABLE test LIKE class;
DESC test;
-- 从class表中复制所有数据到test表
INSERT INTO test SELECT * FROM class;
-- 只复制指定字段
INSERT INTO test (cname) SELECT cname FROM class;
-- 删除表
DROP TABLE IF EXISTS test;

-- 在创建表时就把数据全部复制过来
CREATE TABLE test SELECT * FROM class;

-- 在创建表时复制指定字段过来，利用别名防止重新生成字段
CREATE TABLE test (
id INT PRIMARY KEY AUTO_INCREMENT, 
name VARCHAR(30) NOT NULL) SELECT cname AS name FROM class;
