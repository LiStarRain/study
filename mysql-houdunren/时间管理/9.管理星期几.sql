USE ame;

SELECT * FROM stu WHERE birthday <= date_sub(now(), INTERVAL 22 YEAR);

SELECT weekday(NOW()); # 1-7 0-6
SELECT dayofweek(NOW()); # 7-6 1-7 

-- dayofweek�����ڼ� ���� ��Ӧ����-��ǰ���ڼ�����Ӧ������
SELECT date_add(now(),INTERVAL 5-2 day);

SELECT date_add(now(),INTERVAL 1-weekday(now()) day);