USE ame;

SELECT * FROM stu WHERE birthday <= date_sub(now(), INTERVAL 22 YEAR);

SELECT weekday(NOW()); # 1-7 0-6
SELECT dayofweek(NOW()); # 7-6 1-7 

-- dayofweek算星期几 就用 对应数字-当前星期几所对应的数字
SELECT date_add(now(),INTERVAL 5-2 day);

SELECT date_add(now(),INTERVAL 1-weekday(now()) day);