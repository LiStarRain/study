USE ame;

-- ����һ�������洢��ǰʱ��
SET @time = time(now());
SELECT @time;

-- ��ʱ��ת����������������ת����ʱ��
SELECT time_to_sec(@time),sec_to_time(time_to_sec(@time));

-- ��Ԫ�굽���ھ�����������������ת�������
SELECT TO_DAYS(NOW()),from_days(to_days(NOW())); 

-- �������ڵ��������������������������ڲ�ֵ��
SELECT sname,datediff(NOW(),birthday) FROM stu;

-- ���� ʱ�� ��ֵ
SELECT timediff(time(NOW()),time(birthday)) FROM stu; 

-- ���ݵ�λ��ȡʱ���ֵ
SELECT timestampdiff(week,birthday,now()) FROM stu;

