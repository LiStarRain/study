USE ame;

-- ��ȡ���а༶���
SELECT DISTINCT class_id FROM stu WHERE class_id IS NOT NULL;

-- ͬ��ͬ����ֻ��һ��
SELECT DISTINCT class_id,sname FROM stu WHERE class_id IS NOT NULL;

