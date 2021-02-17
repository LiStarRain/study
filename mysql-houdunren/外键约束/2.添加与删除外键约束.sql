USE ame;

-- 为现有的表添加外键约束
ALTER TABLE stu ADD 
CONSTRAINT stu_class
FOREIGN KEY (class_id)
REFERENCES class(id)
ON DELETE CASCADE;

-- 删除外键约束
ALTER TABLE stu DROP FOREIGN KEY stu_class;