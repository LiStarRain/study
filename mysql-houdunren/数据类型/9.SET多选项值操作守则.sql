USE ame;

ALTER TABLE stu ADD flag SET('推荐','置顶','热门');

-- 推荐 0001 1
-- 置顶 0010 2
-- 热门 0100 4

-- flag 可以是指定值中的任意多个值
INSERT INTO stu (sname,class_id,age,sex,flag) VALUES ('asa',2,12,2,'推荐,热门');
INSERT INTO stu (sname,class_id,age,sex,flag) VALUES ('DS',2,12,2,'推荐,置顶');
-- 查找
-- SELECT * FROM stu WHERE find_in_set('推荐',flag);

-- 查找含有推荐的词条
-- SELECT * FROM stu WHERE flag & 1;

-- 推荐或热门
SELECT * FROM stu WHERE flag & 5;

-- 推荐与热门
SELECT * FROM stu WHERE flag LIKE '%推荐%热门%';
