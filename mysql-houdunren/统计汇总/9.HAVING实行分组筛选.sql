USE ame;

-- ���������Ϊ���������ע�����ȼ�
SELECT count(*),class_id,sex FROM stu GROUP BY class_id,sex;

-- ����������2�İ༶
SELECT class_id,count(*) FROM stu GROUP BY class_id HAVING COUNT(*)>2;