USE ame;

-- ��ߵı������ұߵı��Ƿ��ж�Ӧ���ݶ�����������
SELECT * FROM stu AS s
LEFT JOIN stu_info AS i
ON s.id  = i.stu_id
WHERE i.qq IS NULL;

-- ƫ���ұߵı�
SELECT * FROM stu AS s 
RIGHT JOIN class AS c
ON s.class_id  = c.id;