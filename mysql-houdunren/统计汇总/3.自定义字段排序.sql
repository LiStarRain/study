USE ame;

-- 查找a在哪里出现
SELECT field('a','a','b','c'); # 1 

-- 按照姓氏进行排序 A在虫在张前面
SELECT sname,LEFT(sname,1) AS s FROM stu ORDER BY field(s,'张','虫','A') DESC;