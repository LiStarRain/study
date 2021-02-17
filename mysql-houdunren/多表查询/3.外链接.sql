USE ame;

-- 左边的表无论右边的表是否有对应数据都将他读出来
SELECT * FROM stu AS s
LEFT JOIN stu_info AS i
ON s.id  = i.stu_id
WHERE i.qq IS NULL;

-- 偏向右边的表
SELECT * FROM stu AS s 
RIGHT JOIN class AS c
ON s.class_id  = c.id;