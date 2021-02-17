USE ame;

ALTER TABLE stu ADD sex TINYINT UNSIGNED;
UPDATE stu SET sex = 2 WHERE id = 4;

SELECT * FROM stu WHERE birthday BETWEEN '1990-01-01' AND '1999-12-31';

-- 获取年龄最小的人
SELECT * FROM stu WHERE birthday = (SELECT birthday FROM stu ORDER BY birthday DESC LIMIT 1);

-- 1班和2班99年出生的
SELECT * FROM stu WHERE (class_id = 1 OR class_id = 2) AND year(birthday) = '1999';
SELECT * FROM stu WHERE class_id IN (1,2) AND year(birthday) = '1999';

-- 90后最喜欢去的班级
SELECT count(id) AS total,class_id FROM stu WHERE year(birthday) >= 1990 AND year(birthday) <= 2000 GROUP BY class_id ORDER BY total DESC LIMIT 1;

-- 大于20岁的女生最喜欢去的班级
SELECT class_id FROM stu WHERE sex = 2 AND TIMESTAMPDIFF(YEAR,birthday,now()) > 20 GROUP BY class_id ORDER BY count(id) DESC LIMIT 1;