USE ame;

-- ���Լ����Ҫ�洢�����֧��

-- ���½���ʱ�������Լ��
CREATE TABLE stu2 (
	id INT PRIMARY KEY AUTO_INCREMENT,
	sname CHAR(30) NOT NULL,
	class_id INT DEFAULT NULL,
	# ���Լ��
	CONSTRAINT stu2_class
	FOREIGN KEY (class_id)
	REFERENCES class(id)
	ON DELETE CASCADE  # �༶ɾ����ѧ�������ɾ��
)ENGINE = InnoDB DEFAULT CHARSET = utf8;

