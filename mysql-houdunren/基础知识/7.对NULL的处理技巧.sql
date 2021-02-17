USE ame;

-- NULL不能和任何值比较
-- SELECT * FROM stu WHERE class_id = NULL;

-- 使用IS关键字
SELECT * FROM stu WHERE class_id IS NULL;
-- 非空
SELECT * FROM stu WHERE class_id IS NOT NULL;

-- 若有class_id则显示class_id否则显示'未分配班级'
SELECT sname,IF (class_id,class_id,'未分配班级') FROM stu;

-- 若clas_id没有值则显示未分配
SELECT sname,ifnull(class_id,'未分配')  FROM stu;