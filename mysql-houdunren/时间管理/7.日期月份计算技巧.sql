USE ame;

-- �õ����·�������� 
SELECT * FROM article WHERE publish_time <= last_day(now()) AND publish_time >= date_sub(now(), INTERVAL dayofmonth(now())-1 DAY);

-- �ϸ����ڷ��������
SELECT * FROM article WHERE publish_time >= date_sub(date_sub(now(), INTERVAL 1 MONTH),INTERVAL dayofmonth(now())-1 DAY)
AND publish_time <= last_day(date_sub(now(), INTERVAL 1 MONTH)); 

-- ��ȡ�¸��µ�һ��
SELECT date_add(last_day(now()), INTERVAL 1 DAY);