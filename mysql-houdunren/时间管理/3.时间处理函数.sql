USE ame;

-- 获取年份，月份，日，时，分，秒
SELECT YEAR(birthday),MONTH(birthday),DAY(birthday),HOUR(birthday),MINUTE(birthday),SECOND(birthday) FROM stu;


-- 获取当前的时间与日期与时间，当前日期，当前时间
SELECT NOW(),current_date(),current_time();

-- 一年中的第几天，一周中的第几天（星期天为0），一个月中的第几天
SELECT dayofyear(NOW()),dayofweek(NOW()),dayofmonth(NOW());
SELECT weekday(NOW()); # 星期一为0

-- 创建测试表
CREATE TABLE article (
	id INT PRIMARY KEY AUTO_INCREMENT,
	title VARCHAR(100) NOT NULL,
	publish_time DATETIME DEFAULT NULL,
	status TINYINT DEFAULT 1
);
INSERT INTO article (title,status) VALUES ('薯条的一百种吃法',1);
INSERT INTO article (title,publish_time,status) VALUES ('可乐与橙汁','2019-12-22',0);

SELECT * FROM article WHERE status = 1; 
SELECT * FROM article WHERE status = 0 AND publish_time < now();
UPDATE article SET status = 1 WHERE status = 0 AND publish_time < now(); 