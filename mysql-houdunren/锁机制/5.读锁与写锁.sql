USE ame; 

-- 为表设置读锁后，当前会话和其他会话都不可以修改数据，但可以读取表数据。
LOCK TABLE stu READ;


-- 为表设置了写锁后，当前会话可以修改，查询表，其他会话将无法操作。
LOCK TABLE stu WRITE;

-- 解锁
UNLOCK TABLES;