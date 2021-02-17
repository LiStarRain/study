USE ame;

-- 本周迟到超过两次的同学
SELECT * FROM attendance
WHERE date(create_at) > date(date_add(now(),INTERVAL 0-weekday(NOW()) DAY))
AND time(create_at) > '08:30:00'
GROUP BY stu_id HAVING COUNT(*) > 2;

SELECT date(date_add(now(),INTERVAL 0-weekday(NOW()) DAY));