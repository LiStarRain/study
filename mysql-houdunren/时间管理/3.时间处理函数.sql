USE ame;

-- ��ȡ��ݣ��·ݣ��գ�ʱ���֣���
SELECT YEAR(birthday),MONTH(birthday),DAY(birthday),HOUR(birthday),MINUTE(birthday),SECOND(birthday) FROM stu;


-- ��ȡ��ǰ��ʱ����������ʱ�䣬��ǰ���ڣ���ǰʱ��
SELECT NOW(),current_date(),current_time();

-- һ���еĵڼ��죬һ���еĵڼ��죨������Ϊ0����һ�����еĵڼ���
SELECT dayofyear(NOW()),dayofweek(NOW()),dayofmonth(NOW());
SELECT weekday(NOW()); # ����һΪ0

-- �������Ա�
CREATE TABLE article (
	id INT PRIMARY KEY AUTO_INCREMENT,
	title VARCHAR(100) NOT NULL,
	publish_time DATETIME DEFAULT NULL,
	status TINYINT DEFAULT 1
);
INSERT INTO article (title,status) VALUES ('������һ���ֳԷ�',1);
INSERT INTO article (title,publish_time,status) VALUES ('�������֭','2019-12-22',0);

SELECT * FROM article WHERE status = 1; 
SELECT * FROM article WHERE status = 0 AND publish_time < now();
UPDATE article SET status = 1 WHERE status = 0 AND publish_time < now(); 