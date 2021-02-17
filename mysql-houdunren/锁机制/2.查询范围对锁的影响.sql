-- 查询没有指定明确范围时也会造成大量记录的锁定

USE ame;

BEGIN;
-- 造成范围锁 id (1,2) 之间的数据其它事务不可操作 
UPDATE stu SET sname = 'test' WHERE id > 1 AND id < 3;