--  ��ѯ���뼶��
 select @@tx_isolation;
 
-- ���ûỰ���뼶��Ӱ�쵱ǰ����
set session transaction isolation level read uncommitted;

-- ����ȫ�ָ��뼶��
set global transaction isolation level read uncommitted;
