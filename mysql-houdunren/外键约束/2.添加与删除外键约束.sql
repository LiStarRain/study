USE ame;

-- Ϊ���еı�������Լ��
ALTER TABLE stu ADD 
CONSTRAINT stu_class
FOREIGN KEY (class_id)
REFERENCES class(id)
ON DELETE CASCADE;

-- ɾ�����Լ��
ALTER TABLE stu DROP FOREIGN KEY stu_class;