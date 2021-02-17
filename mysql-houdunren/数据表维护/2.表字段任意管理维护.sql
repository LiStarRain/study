USE ame;

CREATE TABLE stu_copy SELECT * FROM stu;

-- 将stu_copy中的sname字段类型修改为VARCHAR(20) NOT NULL
ALTER TABLE stu_copy MODIFY sname VARCHAR(20) NOT NULL;

-- 修改字段名称以及字段类型
ALTER TABLE stu_copy CHANGE sname name CHAR(30) NOT NULL;

-- 添加字段
ALTER TABLE stu_copy ADD sex CHAR(10) DEFAULT NULL;

-- 在id字段后面添加email字段
ALTER TABLE stu_copy ADD email VARCHAR(50) DEFAULT NULL AFTER id;

-- 在最前面添加QQ字段
ALTER TABLE stu_copy ADD QQ VARCHAR(30) DEFAULT NULL FIRST;

-- 删除QQ字段
ALTER TABLE stu_copy DROP QQ;