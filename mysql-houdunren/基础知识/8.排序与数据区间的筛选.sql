USE ame;

-- 选取sname与age字段并按它们的age字段进行降序排列
SELECT sname,age FROM stu ORDER BY age DESC;
-- 升序
SELECT sname,age FROM stu ORDER BY age ASC;

-- 按class_id升序排列，排序可以指定多个字段，前面排序的优先级较高
SELECT * FROM stu ORDER BY class_id ASC, age ASC;

-- 取id最大的同学
SELECT * FROM stu ORDER BY id DESC LIMIT 1;

-- 从第一个同学开始取两个
SELECT * FROM stu ORDER BY id ASC LIMIT 1,2;

-- 查找2班当中年龄最小的(注意会有同龄人)
SELECT age FROM stu WHERE class_id = 2 AND age IS NOT NULL ORDER BY age ASC LIMIT 1;
SELECT * FROM stu WHERE age = 22 AND class_id = 2;

-- 子查询
SELECT * FROM stu WHERE age = (SELECT age FROM stu WHERE class_id = 2 AND age IS NOT NULL ORDER BY age ASC LIMIT 1);