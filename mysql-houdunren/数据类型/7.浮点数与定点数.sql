USE ame;

-- ��ʾ10λ���֣�С��ռ��λ float 7λ������ double 16λ������
ALTER TABLE class ADD num FLOAT(10,2);
UPDATE class SET num = 999999.99 WHERE id = 3;
SELECT * FROM class;

-- decimal(M,D) ���ݷ�Χ������M��D��ֵ
ALTER TABLE class ADD num2 DECIMAL(10,2);
UPDATE class SET num2 = 99999999.99 WHERE id = 3;
SELECT * FROM class;
