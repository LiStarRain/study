USE ame;
DESC class;

-- 向表中通过设置字段插入一条数据
-- INSERT INTO class SET cname = 'JavaScript',description = '学习JavaScript真有趣';

-- 一次性插入一条数据（设置所有字段）
INSERT INTO class (cname,description) VALUES ('CSS','装饰自己的网站');
INSERT INTO class (cname,description) VALUES ('HTML','布局网站');