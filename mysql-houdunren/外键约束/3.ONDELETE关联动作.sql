USE ame;


-- on delete cascade ���������ݱ�ɾ��֮���ӱ��Ӧ��Ҳ����ɾ��
DELETE FROM class WHERE id = 2;
SELECT * FROM stu2;

ALTER TABLE stu2 DROP FOREIGN KEY stu2_class;

ALTER TABLE stu2 ADD 
CONSTRAINT stu2_class
FOREIGN KEY (class_id)
REFERENCES class(id)
ON DELETE SET NULL; # ����ɾ��ʱ���ӱ��Ӧ����(class_id)����Ϊ��

-- ON DELETE RESTRICT/NO ACTION
-- �ӱ�������ʱ�����еĶ�Ӧ���ݲ�����ɾ��
-- ��û��������������е�����ʱ������ɾ��





