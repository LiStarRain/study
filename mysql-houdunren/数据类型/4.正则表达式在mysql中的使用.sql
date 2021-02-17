USE ame;

-- 查找cname中包含css或者javascript的所有数据
SELECT * FROM class WHERE cname REGEXP 'css|javascript';

-- 替换cname值
UPDATE class SET cname = REPLACE(cname,cname,concat('AME:',cname));
SELECT * FROM class;

-- %可以统配一个或多个字符
SELECT * FROM class WHERE cname LIKE '%j%';

-- _可以匹配单个字符
SELECT * FROM class WHERE cname LIKE '_____S%';


