USE ame;

-- rand()���Ի�ȡ0<num<1�������
SELECT rand(); 

-- ����������ļ�¼	�����ȡһ��
SELECT * FROM stu ORDER BY rand() DESC LIMIT 1;

-- ���������·ݴӴ�С�������������Ƕ� ����� ����
SELECT sname,birthday,month(birthday) AS m FROM stu ORDER BY m ASC;

-- ��������90��
SELECT * FROM stu WHERE year(birthday) > 1990 ORDER BY birthday ASC LIMIT 1;