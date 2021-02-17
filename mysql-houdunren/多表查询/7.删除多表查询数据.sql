USE ame;

-- 删除没有学习任何课程的同学
CREATE TABLE stu2 SELECT * FROM stu;

-- 子查询
DELETE FROM stu2 WHERE id IN 
(SELECT * FROM (
SELECT s.id FROM stu2 AS s
LEFT JOIN stu_lesson AS sl 
ON s.id = sl.stu_id
WHERE sl.lesson_id IS NULL
) AS s);

INSERT INTO stu2 SELECT * FROM stu;

-- 多表删除
DELETE s FROM stu2 AS s
LEFT JOIN stu_lesson AS sl 
ON s.id = sl.stu_id
WHERE sl.lesson_id IS NULL;

