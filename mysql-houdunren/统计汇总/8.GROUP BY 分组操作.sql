USE ame;

-- ��ѡȡ���������ݽ��з���
SELECT class_id,count(class_id) FROM stu WHERE class_id IS NOT NULL AND sex = 2 GROUP BY class_id;

-- ÿ���༶��������ͬѧ
SELECT class_id,sname,min(birthday) FROM stu GROUP BY class_id;

