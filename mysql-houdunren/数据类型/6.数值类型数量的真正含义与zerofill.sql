USE ame;

-- �������ǵ���ʾλ��ֻ����5λ��������ֻ�ܴ洢5λ��
ALTER TABLE class ADD status int(5);

-- ���ǰ��0
ALTER TABLE class ADD state int(5) ZEROFILL;

