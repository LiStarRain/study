USE ame;

-- 修改stu表名字为students
ALTER TABLE stu RENAME students;
RENAME TABLE students TO stu;

-- 备份表
CREATE TABLE stu_copy SELECT * FROM stu;

-- 修改表的字符集
ALTER TABLE stu_copy charset utf8;

-- 清空表数据，一条一条删，速度较慢
-- DELETE FROM stu_copy;
-- 或者使用TRUNCATE，速度较快
TRUNCATE stu_copy;

-- 删除数据表，如果存在就删除该表
DROP TABLE IF EXISTS stu_copy;
