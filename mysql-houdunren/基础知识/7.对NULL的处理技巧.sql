USE ame;

-- NULL���ܺ��κ�ֵ�Ƚ�
-- SELECT * FROM stu WHERE class_id = NULL;

-- ʹ��IS�ؼ���
SELECT * FROM stu WHERE class_id IS NULL;
-- �ǿ�
SELECT * FROM stu WHERE class_id IS NOT NULL;

-- ����class_id����ʾclass_id������ʾ'δ����༶'
SELECT sname,IF (class_id,class_id,'δ����༶') FROM stu;

-- ��clas_idû��ֵ����ʾδ����
SELECT sname,ifnull(class_id,'δ����')  FROM stu;