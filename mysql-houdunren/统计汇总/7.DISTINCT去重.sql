USE ame;

-- 获取所有班级编号
SELECT DISTINCT class_id FROM stu WHERE class_id IS NOT NULL;

-- 同班同名的只算一个
SELECT DISTINCT class_id,sname FROM stu WHERE class_id IS NOT NULL;

