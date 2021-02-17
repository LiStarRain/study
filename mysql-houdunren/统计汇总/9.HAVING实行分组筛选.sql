USE ame;

-- 多个条件作为分组参数，注意优先级
SELECT count(*),class_id,sex FROM stu GROUP BY class_id,sex;

-- 人数不超过2的班级
SELECT class_id,count(*) FROM stu GROUP BY class_id HAVING COUNT(*)>2;