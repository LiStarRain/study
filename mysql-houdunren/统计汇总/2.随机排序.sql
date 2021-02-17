USE ame;

-- rand()可以获取0<num<1的随机数
SELECT rand(); 

-- 获得随机排序的记录	，随机取一个
SELECT * FROM stu ORDER BY rand() DESC LIMIT 1;

-- 按出生的月份从大到小进行排序，排序是对 结果的 排序
SELECT sname,birthday,month(birthday) AS m FROM stu ORDER BY m ASC;

-- 年龄最大的90后
SELECT * FROM stu WHERE year(birthday) > 1990 ORDER BY birthday ASC LIMIT 1;