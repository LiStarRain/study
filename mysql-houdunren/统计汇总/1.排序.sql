USE ame;

-- ���Ա��������
SELECT * FROM stu ORDER BY sex ASC;

-- ���¼����Ůͬѧ
SELECT * FROM stu WHERE sex = 2 ORDER BY id DESC LIMIT 1;

-- ���ԶԶ���ֶν�������ע�����ȼ�
SELECT * FROM stu ORDER BY sex DESC,birthday ASC;