USE ame;

ALTER TABLE stu ADD sex TINYINT UNSIGNED;
SELECT * FROM stu;

-- sex默认为NULL，只能去男或女当中的某个值
ALTER TABLE stu MODIFY sex ENUM('男','女') DEFAULT NULL;
INSERT INTO stu (sname,class_id,age,sex) VALUES ('呀哈哈',2,22,'男');

SELECT * FROM stu WHERE sex = 1;