-- ��ѯû��ָ����ȷ��ΧʱҲ����ɴ�����¼������

USE ame;

BEGIN;
-- ��ɷ�Χ�� id (1,2) ֮��������������񲻿ɲ��� 
UPDATE stu SET sname = 'test' WHERE id > 1 AND id < 3;