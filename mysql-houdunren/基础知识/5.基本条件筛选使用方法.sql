USE ame;

SELECT * FROM class;

-- ɸѡid���ڵ���2����������
SELECT * FROM class WHERE id >= 2;

-- ����cname����Java��ͷ��cname�ֶ�
SELECT cname FROM class WHERE cname LIKE 'Java%';

-- ����cname����Script��β��cname�ֶ�
SELECT cname FROM class WHERE cname LIKE '%Script';

-- ����description�а���'��վ'��cname�ֶ�
SELECT cname FROM class WHERE description LIKE '%��վ%';

-- �����ַ�����Ϊ3��cname�ֶ�
SELECT cname FROM class WHERE cname LIKE '___';

-- ����description�а���'��վ'����id����2��cname�ֶ�
SELECT cname FROM class WHERE description LIKE '%��վ%' AND id > 2; 

-- ����description�в�����'��վ'��cname�ֶ�
SELECT cname FROM class WHERE description NOT LIKE '%��վ%';

-- �ϲ�����з���
SELECT concat(cname,description) AS class_info FROM class;

-- ����һ��ѧ����
CREATE TABLE stu  (
	id INT PRIMARY KEY AUTO_INCREMENT,
	sname char(10),
	--  Ĭ��Ϊ��
	class_id int DEFAULT NULL,
	age SMALLINT NOT NULL
);
-- ���������¼
INSERT INTO stu(sname,class_id,age) VALUES ('Ame',1,21),('Rain',2,22),('Lsr',3,18);
INSERT INTO stu(sname,class_id,age) VALUES ('����',2,25),('����',NULL,14),('JOJO',1,42);

