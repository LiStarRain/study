USE ame;

-- ��������ֶΣ���������Ϊ��������
ALTER TABLE stu ADD birthday DATETIME DEFAULT NULL;

UPDATE stu SET birthday =  "1997-02-27 22:22:22" WHERE id = 5;

-- DATEFORMAT����������ʽ�����ں�ʱ��
SELECT sname,date_format(birthday,'%Y��%m��%d�� %H:%i:%s') AS birthday FROM stu; 

-- TIME_FORMATҲ����������ʽ��ʱ��
SELECT sname,time_format(birthday,'%H:%i:%s') AS birthday_time FROM stu;


