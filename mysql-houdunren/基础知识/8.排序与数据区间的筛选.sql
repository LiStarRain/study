USE ame;

-- ѡȡsname��age�ֶβ������ǵ�age�ֶν��н�������
SELECT sname,age FROM stu ORDER BY age DESC;
-- ����
SELECT sname,age FROM stu ORDER BY age ASC;

-- ��class_id�������У��������ָ������ֶΣ�ǰ����������ȼ��ϸ�
SELECT * FROM stu ORDER BY class_id ASC, age ASC;

-- ȡid����ͬѧ
SELECT * FROM stu ORDER BY id DESC LIMIT 1;

-- �ӵ�һ��ͬѧ��ʼȡ����
SELECT * FROM stu ORDER BY id ASC LIMIT 1,2;

-- ����2�൱��������С��(ע�����ͬ����)
SELECT age FROM stu WHERE class_id = 2 AND age IS NOT NULL ORDER BY age ASC LIMIT 1;
SELECT * FROM stu WHERE age = 22 AND class_id = 2;

-- �Ӳ�ѯ
SELECT * FROM stu WHERE age = (SELECT age FROM stu WHERE class_id = 2 AND age IS NOT NULL ORDER BY age ASC LIMIT 1);