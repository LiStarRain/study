USE ame;

-- Ĭ���ظ��Ļ���˵�
SELECT * FROM stu
UNION 
SELECT * FROM stu;

-- ������
SELECT * FROM stu
UNION  ALL 
SELECT * FROM stu;

-- �����������Ű���һ��
(SELECT sname FROM stu LIMIT 3)
UNION ALL
(SELECT cname FROM class LIMIT 3)
LIMIT 4;

-- �������ĺ���С��ͬѧ
(SELECT * FROM stu ORDER BY birthday ASC LIMIT 1)
UNION 
(SELECT * FROM stu ORDER BY birthday DESC LIMIT 1);