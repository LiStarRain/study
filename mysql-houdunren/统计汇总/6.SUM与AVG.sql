USE ame;

-- ���
SELECT sum(click) FROM article;

-- ƽ��ֵ
SELECT AVG(click) FROM article;

-- ��ȡ����ƽ�������������
SELECT * FROM article WHERE click < (SELECT avg(click) FROM article);

-- ��ȡѧ����ƽ������
SELECT avg(timestampdiff(YEAR,birthday,now())) AS age FROM stu;