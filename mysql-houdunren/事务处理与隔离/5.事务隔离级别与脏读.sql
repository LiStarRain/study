--  查询隔离级别
 select @@tx_isolation;
 
-- 设置会话隔离级别，影响当前连接
set session transaction isolation level read uncommitted;

-- 设置全局隔离级别
set global transaction isolation level read uncommitted;
