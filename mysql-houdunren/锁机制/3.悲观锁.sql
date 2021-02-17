USE ame;

BEGIN;
-- 悲观锁
-- 指对数据被外界修改持保守态度，在整个数据处理过程中，将数据处于锁定状态，
-- 可以很好地解决并发事务的更新丢失问题
SELECT * FROM goods WHERE id=1 FOR UPDATE; 
UPDATE goods SET num=num-2 WHERE id=1; 