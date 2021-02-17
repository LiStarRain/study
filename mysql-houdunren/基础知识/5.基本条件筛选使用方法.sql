USE ame;

SELECT * FROM class;

-- 筛选id大于等于2的所有数据
SELECT * FROM class WHERE id >= 2;

-- 查找cname中以Java开头的cname字段
SELECT cname FROM class WHERE cname LIKE 'Java%';

-- 查找cname中以Script结尾的cname字段
SELECT cname FROM class WHERE cname LIKE '%Script';

-- 查找description中包含'网站'的cname字段
SELECT cname FROM class WHERE description LIKE '%网站%';

-- 查找字符长度为3的cname字段
SELECT cname FROM class WHERE cname LIKE '___';

-- 查找description中包含'网站'并且id大于2的cname字段
SELECT cname FROM class WHERE description LIKE '%网站%' AND id > 2; 

-- 查找description中不包含'网站'的cname字段
SELECT cname FROM class WHERE description NOT LIKE '%网站%';

-- 合并多个列返回
SELECT concat(cname,description) AS class_info FROM class;

-- 创建一个学生表
CREATE TABLE stu  (
	id INT PRIMARY KEY AUTO_INCREMENT,
	sname char(10),
	--  默认为空
	class_id int DEFAULT NULL,
	age SMALLINT NOT NULL
);
-- 插入多条记录
INSERT INTO stu(sname,class_id,age) VALUES ('Ame',1,21),('Rain',2,22),('Lsr',3,18);
INSERT INTO stu(sname,class_id,age) VALUES ('张三',2,25),('李四',NULL,14),('JOJO',1,42);

