USE ame;

-- 对选取出来的数据进行分组
SELECT class_id,count(class_id) FROM stu WHERE class_id IS NOT NULL AND sex = 2 GROUP BY class_id;

-- 每个班级年龄最大的同学
SELECT class_id,sname,min(birthday) FROM stu GROUP BY class_id;

