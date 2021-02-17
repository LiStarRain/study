USE ame;

-- 显示10位数字，小数占两位 float 7位及以下 double 16位及以下
ALTER TABLE class ADD num FLOAT(10,2);
UPDATE class SET num = 999999.99 WHERE id = 3;
SELECT * FROM class;

-- decimal(M,D) 数据范围依赖于M和D的值
ALTER TABLE class ADD num2 DECIMAL(10,2);
UPDATE class SET num2 = 99999999.99 WHERE id = 3;
SELECT * FROM class;
