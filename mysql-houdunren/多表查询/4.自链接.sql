USE ame;

-- 与Ame在同一个班级的同学  子查询
SELECT * FROM stu WHERE class_id = (SELECT class_id FROM stu WHERE sname = 'Ame')
AND SNAME != 'ame';

-- 自链接
SELECT s2.sname FROM stu AS s1
INNER JOIN stu AS s2
ON s1.class_id = s2.class_id
WHERE s1.sname = 'ame'
AND s2.sname != 'ame';

-- 与ame同一年出生的
SELECT s2.sname FROM stu AS s1
INNER JOIN stu AS s2
ON year(s1.birthday) = year(s2.birthday)
WHERE s1.sname = 'AME'
AND s2.sname != 'ame';

-- 比ame年龄大的同学
SELECT s2.sname FROM stu AS s1
INNER JOIN stu AS s2
ON year(s1.birthday) > year(s2.birthday)
AND s1.sname = 'ame';
