USE ame;

-- ɾ��û��ѧϰ�κογ̵�ͬѧ
CREATE TABLE stu2 SELECT * FROM stu;

-- �Ӳ�ѯ
DELETE FROM stu2 WHERE id IN 
(SELECT * FROM (
SELECT s.id FROM stu2 AS s
LEFT JOIN stu_lesson AS sl 
ON s.id = sl.stu_id
WHERE sl.lesson_id IS NULL
) AS s);

INSERT INTO stu2 SELECT * FROM stu;

-- ���ɾ��
DELETE s FROM stu2 AS s
LEFT JOIN stu_lesson AS sl 
ON s.id = sl.stu_id
WHERE sl.lesson_id IS NULL;

