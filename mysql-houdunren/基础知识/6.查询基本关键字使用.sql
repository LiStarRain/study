USE ame;

-- ��ѯ2��������ְ���'��'����������
SELECT * FROM stu WHERE class_id = 2 OR sname LIKE '%��%';

-- ȡ���༶��Ų�����ȥ��
SELECT DISTINCT class_id FROM stu;

-- ����20��40��ѧ��
SELECT * FROM stu WHERE age>=20 AND age <= 40;
-- ������BETWEEN�ؼ���
SELECT * FROM stu WHERE age BETWEEN 20 AND 40;

-- ���䲻��20��40��ѧ��
SELECT * FROM stu WHERE age NOT BETWEEN 20 AND 40;

-- ������2�Ż���3�Ű༶��ͬѧ
SELECT * FROM stu WHERE class_id = 2 OR class_id = 3;
-- ����ʹ��IN�ؼ���
SELECT * FROM stu WHERE class_id IN (2,3);

-- ���Ҳ���2�Ż���3�Ű༶��ͬѧ
SELECT * FROM stu WHERE class_id NOT IN (2,3);