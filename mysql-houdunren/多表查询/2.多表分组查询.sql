USE ame;

-- ʹ��INNSER JOIN�����б�Ĺ��� 
SELECT * FROM stu AS s INNER JOIN class AS c
ON s.class_id  = c.class_id;

-- ��ѯСѧ������ѧ��
SELECT s.sname FROM stu AS s INNER JOIN class AS c
ON s.class_id  = c.class_id
WHERE s.class_id = 2;

-- �������İ༶
SELECT c.cname,count(*) FROM stu AS s INNER JOIN class AS c
ON s.class_id = c.class_id 
GROUP BY c.class_id
HAVING count(*) >= 2
ORDER BY count(*) DESC
LIMIT 1;