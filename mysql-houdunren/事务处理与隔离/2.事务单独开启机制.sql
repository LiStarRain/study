USE ame;

-- ʹ������ʹ�ö���SQL�����ִ��ʱҪôһ��ɹ�Ҫôһ��ʧ�ܣ���֤��������������

-- ��ʼ����
-- START TRANSACTION;
BEGIN;
	INSERT INTO stu (sname,class_id,birthday,sex) VALUES ('����',1,'1999-01-01 19:30:22',1);

-- ����ع���ȡ�������������
ROLLBACK;
-- �ύ����ֻ���ύ����֮�󣬲Ż������ı������ݣ�ִ��rollback��commit�������ִ������
COMMIT;
