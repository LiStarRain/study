USE ame;

ALTER TABLE stu ADD flag SET('�Ƽ�','�ö�','����');

-- �Ƽ� 0001 1
-- �ö� 0010 2
-- ���� 0100 4

-- flag ������ָ��ֵ�е�������ֵ
INSERT INTO stu (sname,class_id,age,sex,flag) VALUES ('asa',2,12,2,'�Ƽ�,����');
INSERT INTO stu (sname,class_id,age,sex,flag) VALUES ('DS',2,12,2,'�Ƽ�,�ö�');
-- ����
-- SELECT * FROM stu WHERE find_in_set('�Ƽ�',flag);

-- ���Һ����Ƽ��Ĵ���
-- SELECT * FROM stu WHERE flag & 1;

-- �Ƽ�������
SELECT * FROM stu WHERE flag & 5;

-- �Ƽ�������
SELECT * FROM stu WHERE flag LIKE '%�Ƽ�%����%';
