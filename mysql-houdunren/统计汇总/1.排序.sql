USE ame;

-- 对性别进行排序
SELECT * FROM stu ORDER BY sex ASC;

-- 最新加入的女同学
SELECT * FROM stu WHERE sex = 2 ORDER BY id DESC LIMIT 1;

-- 可以对多个字段进行排序，注意优先级
SELECT * FROM stu ORDER BY sex DESC,birthday ASC;