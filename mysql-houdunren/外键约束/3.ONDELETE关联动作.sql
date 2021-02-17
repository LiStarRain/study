USE ame;


-- on delete cascade 当主表数据被删除之后子表对应的也必须删除
DELETE FROM class WHERE id = 2;
SELECT * FROM stu2;

ALTER TABLE stu2 DROP FOREIGN KEY stu2_class;

ALTER TABLE stu2 ADD 
CONSTRAINT stu2_class
FOREIGN KEY (class_id)
REFERENCES class(id)
ON DELETE SET NULL; # 主表删除时将子表对应内容(class_id)设置为空

-- ON DELETE RESTRICT/NO ACTION
-- 子表有数据时主表中的对应数据不允许删除
-- 当没有外键引用主表中的数据时才允许删除





