USE ame;

-- ����a���������
SELECT field('a','a','b','c'); # 1 

-- �������Ͻ������� A�ڳ�����ǰ��
SELECT sname,LEFT(sname,1) AS s FROM stu ORDER BY field(s,'��','��','A') DESC;