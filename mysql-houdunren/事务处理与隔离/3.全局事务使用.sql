USE ame;

-- ����ȫ���������е�SQL��䶼Ҫͨ������������
SET autocommit = 0; # �ر�ϵͳ�Զ��ύ����Ҫ�ֶ�commit

DELETE FROM stu WHERE id IN (16,17);

-- �����޸�����
COMMIT;

