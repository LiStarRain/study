USE ame;
DESC class;

-- ����class��Ľṹ����test��
CREATE TABLE test LIKE class;
DESC test;
-- ��class���и����������ݵ�test��
INSERT INTO test SELECT * FROM class;
-- ֻ����ָ���ֶ�
INSERT INTO test (cname) SELECT cname FROM class;
-- ɾ����
DROP TABLE IF EXISTS test;

-- �ڴ�����ʱ�Ͱ�����ȫ�����ƹ���
CREATE TABLE test SELECT * FROM class;

-- �ڴ�����ʱ����ָ���ֶι��������ñ�����ֹ���������ֶ�
CREATE TABLE test (
id INT PRIMARY KEY AUTO_INCREMENT, 
name VARCHAR(30) NOT NULL) SELECT cname AS name FROM class;
