USE ame;

-- ��ѯ����
DESC class;

-- ��class���в�ѯ�����ֶ�
SELECT * FROM class;

-- ��class���в�ѯid��cname�ֶ�
SELECT id,cname FROM class;
SELECT cname,id FROM class;

-- Ϊ��ѯ�����ֶ�ȡ���������Է�ֹ�ֶεĳ�ͻ
SELECT id AS uId,cname AS name FROM class;