USE ame;

-- 得到本月发表的文章 
SELECT * FROM article WHERE publish_time <= last_day(now()) AND publish_time >= date_sub(now(), INTERVAL dayofmonth(now())-1 DAY);

-- 上个月内发表的文章
SELECT * FROM article WHERE publish_time >= date_sub(date_sub(now(), INTERVAL 1 MONTH),INTERVAL dayofmonth(now())-1 DAY)
AND publish_time <= last_day(date_sub(now(), INTERVAL 1 MONTH)); 

-- 获取下个月第一天
SELECT date_add(last_day(now()), INTERVAL 1 DAY);