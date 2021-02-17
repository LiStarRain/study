USE ame;

-- 获取月末日期
SELECT last_day(now());

-- 月初日期
SELECT date_sub(now(),INTERVAL dayofmonth(now())-1 DAY);