USE ame;

ALTER TABLE stu ADD sex TINYINT UNSIGNED;
SELECT * FROM stu;

-- sexĬ��ΪNULL��ֻ��ȥ�л�Ů���е�ĳ��ֵ
ALTER TABLE stu MODIFY sex ENUM('��','Ů') DEFAULT NULL;
INSERT INTO stu (sname,class_id,age,sex) VALUES ('ѽ����',2,22,'��');

SELECT * FROM stu WHERE sex = 1;