USE ame;

-- ��ĳʱ������ָ��ʱ��
SELECT addtime(now(), '08:00:00');
SELECT timestamp(now(), '08:00:00');

-- ����֮ǰ
SELECT date_add(now(),INTERVAL -7 DAY);
-- 10Сʱ20����֮��
SELECT date_add(now(),INTERVAL '10:20' HOUR_MINUTE);
-- 2��2Сʱ֮��
SELECT date_add(now(),INTERVAL '2 2' DAY_HOUR);

-- ����
SELECT date_sub(now(),INTERVAL '2 2' DAY_HOUR);