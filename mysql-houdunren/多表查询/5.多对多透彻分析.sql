USE ame;

CREATE TABLE lesson (
	id INT PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(20) NOT NULL
);

INSERT INTO lesson (name) VALUES ('PHP'),('MYSQL'),('LINUX'),('JavaScript');

-- 使用中间表来记录
CREATE TABLE stu_lesson (
	stu_id int NOT NULL,
	lesson_id int NOT NULL
);

INSERT INTO stu_lesson (stu_id,lesson_id) VALUES
(1,2),(1,1),(2,3),(3,4),(4,2),(5,3),(6,1);

-- 查找ame学习的课程，链接3张表
SELECT sname,name FROM stu AS s
INNER JOIN stu_lesson AS l
ON s.id = l.stu_id
INNER JOIN stu_info AS i
ON i.id = l.stu_id
INNER JOIN lesson 
ON lesson.id = l.lesson_id
WHERE sname = 'ame';

-- 哪个班的同学最喜欢学习MYSQL
SELECT cname,count(*) AS total FROM stu AS s
INNER JOIN class AS c
ON s.class_id = c.class_id
INNER JOIN stu_lesson AS sl 
ON sl.stu_id = s.id
INNER JOIN lesson AS l
ON l.id = sl.lesson_id
WHERE name = 'MYSQL'
GROUP BY cname
ORDER BY total DESC;
