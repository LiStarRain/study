USE ame;

-- 求和
SELECT sum(click) FROM article;

-- 平均值
SELECT AVG(click) FROM article;

-- 获取低于平均点击数的文章
SELECT * FROM article WHERE click < (SELECT avg(click) FROM article);

-- 获取学生的平均年龄
SELECT avg(timestampdiff(YEAR,birthday,now())) AS age FROM stu;