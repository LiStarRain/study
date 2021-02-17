USE ame;

-- 使用事务使得多条SQL语句在执行时要么一起成功要么一起失败，保证流程链的完整性

-- 开始事务
-- START TRANSACTION;
BEGIN;
	INSERT INTO stu (sname,class_id,birthday,sex) VALUES ('垃圾',1,'1999-01-01 19:30:22',1);

-- 事务回滚，取消本次事务操作
ROLLBACK;
-- 提交事务，只有提交事务之后，才会真正改变表的数据，执行rollback或commit后事务就执行完了
COMMIT;
