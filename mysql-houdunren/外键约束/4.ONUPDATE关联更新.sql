USE ame;

ALTER TABLE stu ADD
CONSTRAINT stu_class
FOREIGN KEY (class_id)
REFERENCES class(id)
ON DELETE NO ACTION
-- ON UPDATE CASCADE; # �������£�������������Ϊ��������ݸ���ʱ�ӱ���������֮����
-- ON UPDATE SET NULL;  # ������������Ϊ��������ݸ���ʱ�ӱ�����������ΪNULL
ON UPDATE RESTRICT; # �޶��� ������������Ϊ��������ݸ���ʱ�ӱ������޶��������������

ALTER TABLE stu DROP FOREIGN KEY stu_class;



