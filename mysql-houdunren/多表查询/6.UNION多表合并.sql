USE ame;

-- 默认重复的会过滤掉
SELECT * FROM stu
UNION 
SELECT * FROM stu;

-- 不过滤
SELECT * FROM stu
UNION  ALL 
SELECT * FROM stu;

-- 多条件用括号包裹一下
(SELECT sname FROM stu LIMIT 3)
UNION ALL
(SELECT cname FROM class LIMIT 3)
LIMIT 4;

-- 年龄最大的和最小的同学
(SELECT * FROM stu ORDER BY birthday ASC LIMIT 1)
UNION 
(SELECT * FROM stu ORDER BY birthday DESC LIMIT 1);