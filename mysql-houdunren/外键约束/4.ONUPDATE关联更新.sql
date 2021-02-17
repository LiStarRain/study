USE ame;

ALTER TABLE stu ADD
CONSTRAINT stu_class
FOREIGN KEY (class_id)
REFERENCES class(id)
ON DELETE NO ACTION
-- ON UPDATE CASCADE; # 关联更新，当主表被引用作为外键的数据更新时子表的外键会随之更新
-- ON UPDATE SET NULL;  # 当主表被引用作为外键的数据更新时子表的外键会设置为NULL
ON UPDATE RESTRICT; # 无动作 当主表被引用作为外键的数据更新时子表的外键无动作，会提出警告

ALTER TABLE stu DROP FOREIGN KEY stu_class;



