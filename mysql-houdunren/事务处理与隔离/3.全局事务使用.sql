USE ame;

-- 开启全局事务，所有的SQL语句都要通过事务来操作
SET autocommit = 0; # 关闭系统自动提交，需要手动commit

DELETE FROM stu WHERE id IN (16,17);

-- 真正修改数据
COMMIT;

