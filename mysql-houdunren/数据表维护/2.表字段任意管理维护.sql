USE ame;

CREATE TABLE stu_copy SELECT * FROM stu;

-- ��stu_copy�е�sname�ֶ������޸�ΪVARCHAR(20) NOT NULL
ALTER TABLE stu_copy MODIFY sname VARCHAR(20) NOT NULL;

-- �޸��ֶ������Լ��ֶ�����
ALTER TABLE stu_copy CHANGE sname name CHAR(30) NOT NULL;

-- ����ֶ�
ALTER TABLE stu_copy ADD sex CHAR(10) DEFAULT NULL;

-- ��id�ֶκ������email�ֶ�
ALTER TABLE stu_copy ADD email VARCHAR(50) DEFAULT NULL AFTER id;

-- ����ǰ�����QQ�ֶ�
ALTER TABLE stu_copy ADD QQ VARCHAR(30) DEFAULT NULL FIRST;

-- ɾ��QQ�ֶ�
ALTER TABLE stu_copy DROP QQ;