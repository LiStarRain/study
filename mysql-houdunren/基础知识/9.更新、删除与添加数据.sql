USE ame;

-- �޸ĸ�������
UPDATE stu SET class_id = 2 WHERE class_id IS NULL;

-- ��С��20���ͬѧ��Ϊ�༶1
UPDATE stu SET class_id = 1 WHERE age < 20;

SELECT * FROM stu;

-- 1������С��20��ͬѧ��������10
UPDATE stu SET age = age + 10 WHERE age < 20 AND class_id = 1;

-- ɾ���������40�������
DELETE FROM stu WHERE age > 40;

-- ɾ�������������ͬѧ
DELETE FROM stu ORDER BY id DESC LIMIT 2;

-- ���һ������
INSERT INTO stu SET sname = 'С��',age = 21,class_id = 1;

-- ���������¼
INSERT INTO stu (sname,age,class_id) VALUES ('С��',32,2),('С��',21,2);
