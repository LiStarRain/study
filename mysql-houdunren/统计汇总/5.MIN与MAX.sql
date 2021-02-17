USE ame;

-- 取班级编号最大的
SELECT max(class_id) FROM stu;
-- 取最小
SELECT min(class_id) FROM stu;

# 年龄最小的同学的出生年份
SELECT year(max(birthday)) FROM stu;

