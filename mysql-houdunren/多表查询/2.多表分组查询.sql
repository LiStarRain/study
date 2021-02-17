USE ame;

-- 使用INNSER JOIN语句进行表的关联 
SELECT * FROM stu AS s INNER JOIN class AS c
ON s.class_id  = c.class_id;

-- 查询小学的所有学生
SELECT s.sname FROM stu AS s INNER JOIN class AS c
ON s.class_id  = c.class_id
WHERE s.class_id = 2;

-- 人数最多的班级
SELECT c.cname,count(*) FROM stu AS s INNER JOIN class AS c
ON s.class_id = c.class_id 
GROUP BY c.class_id
HAVING count(*) >= 2
ORDER BY count(*) DESC
LIMIT 1;