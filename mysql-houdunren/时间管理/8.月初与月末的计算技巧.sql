USE ame;

-- ��ȡ��ĩ����
SELECT last_day(now());

-- �³�����
SELECT date_sub(now(),INTERVAL dayofmonth(now())-1 DAY);