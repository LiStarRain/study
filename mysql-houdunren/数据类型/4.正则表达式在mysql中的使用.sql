USE ame;

-- ����cname�а���css����javascript����������
SELECT * FROM class WHERE cname REGEXP 'css|javascript';

-- �滻cnameֵ
UPDATE class SET cname = REPLACE(cname,cname,concat('AME:',cname));
SELECT * FROM class;

-- %����ͳ��һ�������ַ�
SELECT * FROM class WHERE cname LIKE '%j%';

-- _����ƥ�䵥���ַ�
SELECT * FROM class WHERE cname LIKE '_____S%';


