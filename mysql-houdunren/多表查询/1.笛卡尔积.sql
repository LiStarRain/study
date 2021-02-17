USE ame;

-- 默认全都匹配，产生笛卡尔积，6*3=18条记录
SELECT * FROM stu,class;

-- 一对多 的多表查询
SELECT s.sname,c.cname FROM stu AS s,class AS c WHERE s.class_id  = c.class_id;
