USE ame;

-- 查询2班或者名字包含'张'的所有数据
SELECT * FROM stu WHERE class_id = 2 OR sname LIKE '%张%';

-- 取出班级编号并对其去重
SELECT DISTINCT class_id FROM stu;

-- 年龄20到40的学生
SELECT * FROM stu WHERE age>=20 AND age <= 40;
-- 或者用BETWEEN关键字
SELECT * FROM stu WHERE age BETWEEN 20 AND 40;

-- 年龄不在20到40的学生
SELECT * FROM stu WHERE age NOT BETWEEN 20 AND 40;

-- 查找在2号或者3号班级的同学
SELECT * FROM stu WHERE class_id = 2 OR class_id = 3;
-- 或者使用IN关键字
SELECT * FROM stu WHERE class_id IN (2,3);

-- 查找不在2号或者3号班级的同学
SELECT * FROM stu WHERE class_id NOT IN (2,3);