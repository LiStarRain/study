USE ame;

BEGIN;
-- ������
-- ָ�����ݱ�����޸ĳֱ���̬�ȣ����������ݴ�������У������ݴ�������״̬��
-- ���Ժܺõؽ����������ĸ��¶�ʧ����
SELECT * FROM goods WHERE id=1 FOR UPDATE; 
UPDATE goods SET num=num-2 WHERE id=1; 