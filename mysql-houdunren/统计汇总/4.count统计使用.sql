USE ame;

-- 对查询到的结果进行汇总
SELECT COUNT(*) FROM stu;

-- 查询所有女同学的数量
SELECT COUNT(*) FROM stu WHERE sex = 2; # 2

-- count()是不会计入NULL的