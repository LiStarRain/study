-- 关闭自动提交
SET autocommit = 0;

UPDATE stu SET sname = 'ame1' WHERE id = 1;
COMMIT;

-- 使用非索引字段筛选时，将造成全表锁定即表级锁
-- 将字段添加索引后，行锁功能就又有效了