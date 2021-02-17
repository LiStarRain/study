USE ame;

-- 查询操作
DESC class;

-- 从class表中查询所有字段
SELECT * FROM class;

-- 从class表中查询id和cname字段
SELECT id,cname FROM class;
SELECT cname,id FROM class;

-- 为查询到的字段取别名，可以防止字段的冲突
SELECT id AS uId,cname AS name FROM class;