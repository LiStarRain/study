USE ame;

-- 修改更新数据
UPDATE stu SET class_id = 2 WHERE class_id IS NULL;

-- 把小于20岁的同学改为班级1
UPDATE stu SET class_id = 1 WHERE age < 20;

SELECT * FROM stu;

-- 1班年龄小于20的同学年龄增加10
UPDATE stu SET age = age + 10 WHERE age < 20 AND class_id = 1;

-- 删除年龄大于40岁的数据
DELETE FROM stu WHERE age > 40;

-- 删除最后报名的两个同学
DELETE FROM stu ORDER BY id DESC LIMIT 2;

-- 添加一条数据
INSERT INTO stu SET sname = '小绿',age = 21,class_id = 1;

-- 插入多条记录
INSERT INTO stu (sname,age,class_id) VALUES ('小明',32,2),('小龙',21,2);
