USE ame;

-- ����ߺ��ұ�ȡcname�ֶ����ݵ������ַ������м�ȡһ���ַ�,ȡ�ڶ����ַ���������ַ�
SELECT LEFT(cname,2),RIGHT(cname,2),MID(cname,2,1),mid(cname,2) FROM class;

-- ��ȡ�ַ���
SELECT substring(cname,2,3) FROM class;

-- ��ȡ�ַ����ĳ���
SELECT char_length(cname) FROM class;

-- �����ַ���
SELECT concat('���:',id) AS id FROM class;

-- ���ȳ���5���ַ����õ�����
SELECT IF(char_length(description)>5,concat(substring(description,1,5),'...'),description) AS res FROM class;