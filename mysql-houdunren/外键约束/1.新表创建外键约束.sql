USE ame;

-- 外键约束需要存储引擎的支持

-- 在新建表时创建外键约束
CREATE TABLE stu2 (
	id INT PRIMARY KEY AUTO_INCREMENT,
	sname CHAR(30) NOT NULL,
	class_id INT DEFAULT NULL,
	# 外键约束
	CONSTRAINT stu2_class
	FOREIGN KEY (class_id)
	REFERENCES class(id)
	ON DELETE CASCADE  # 班级删除，学生表跟着删除
)ENGINE = InnoDB DEFAULT CHARSET = utf8;

