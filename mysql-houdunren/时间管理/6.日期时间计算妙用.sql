USE ame;

-- 向某时间后添加指定时间
SELECT addtime(now(), '08:00:00');
SELECT timestamp(now(), '08:00:00');

-- 七天之前
SELECT date_add(now(),INTERVAL -7 DAY);
-- 10小时20分钟之后
SELECT date_add(now(),INTERVAL '10:20' HOUR_MINUTE);
-- 2天2小时之后
SELECT date_add(now(),INTERVAL '2 2' DAY_HOUR);

-- 减少
SELECT date_sub(now(),INTERVAL '2 2' DAY_HOUR);