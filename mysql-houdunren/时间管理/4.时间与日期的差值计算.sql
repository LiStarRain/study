USE ame;

-- 定义一个变量存储当前时间
SET @time = time(now());
SELECT @time;

-- 把时间转换成秒数，把秒数转换成时间
SELECT time_to_sec(@time),sec_to_time(time_to_sec(@time));

-- 从元年到现在经过的天数，将天数转换成年份
SELECT TO_DAYS(NOW()),from_days(to_days(NOW())); 

-- 出生日期到现在所经过的天数（计算日期差值）
SELECT sname,datediff(NOW(),birthday) FROM stu;

-- 计算 时间 差值
SELECT timediff(time(NOW()),time(birthday)) FROM stu; 

-- 根据单位获取时间差值
SELECT timestampdiff(week,birthday,now()) FROM stu;

