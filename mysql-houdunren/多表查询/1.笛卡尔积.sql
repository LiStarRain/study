USE ame;

-- Ĭ��ȫ��ƥ�䣬�����ѿ�������6*3=18����¼
SELECT * FROM stu,class;

-- һ�Զ� �Ķ���ѯ
SELECT s.sname,c.cname FROM stu AS s,class AS c WHERE s.class_id  = c.class_id;
