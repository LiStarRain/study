USE ame;

-- �޸�stu������Ϊstudents
ALTER TABLE stu RENAME students;
RENAME TABLE students TO stu;

-- ���ݱ�
CREATE TABLE stu_copy SELECT * FROM stu;

-- �޸ı���ַ���
ALTER TABLE stu_copy charset utf8;

-- ��ձ����ݣ�һ��һ��ɾ���ٶȽ���
-- DELETE FROM stu_copy;
-- ����ʹ��TRUNCATE���ٶȽϿ�
TRUNCATE stu_copy;

-- ɾ�����ݱ�������ھ�ɾ���ñ�
DROP TABLE IF EXISTS stu_copy;
