USE ame;

-- 添加生日字段，数据类型为日期类型
ALTER TABLE stu ADD birthday DATETIME DEFAULT NULL;

UPDATE stu SET birthday =  "1997-02-27 22:22:22" WHERE id = 5;

-- DATEFORMAT可以用来格式化日期和时间
SELECT sname,date_format(birthday,'%Y年%m月%d日 %H:%i:%s') AS birthday FROM stu; 

-- TIME_FORMAT也可以用来格式化时间
SELECT sname,time_format(birthday,'%H:%i:%s') AS birthday_time FROM stu;


