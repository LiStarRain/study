USE ame;

-- ���ʱ����ֶΣ�Ĭ��ֵΪ��ǰʱ���ʱ���
ALTER TABLE stu ADD updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP;
-- ���ܳ���ʱ�������ʾ�ķ�Χ
UPDATE stu SET updated_at = '1976-02-22 08:22:33' WHERE id = 1;
-- ��������ʱʱ�䲻����֮ˢ��
UPDATE stu SET sname = 'Rain' WHERE id = 3;
-- ɾ���ֶ�
ALTER TABLE stu DROP updated_at;

-- ���������ݸ���ʱ�Զ�����ʱ��
ALTER TABLE stu ADD updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP;
SELECT * FROM stu;