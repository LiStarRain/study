USE ame;

CREATE TABLE attendance (
	id INT PRIMARY KEY AUTO_INCREMENT,
	stu_id INT NOT NULL,
	create_at DATETIME DEFAULT NULL 
);

INSERT INTO attendance (stu_id,create_at)
VALUES (1,'2021-02-01 08:21:00'),(2,'2021-02-01 09:21:00'),(3,'2021-02-01 07:22:00'),
(4,'2021-02-21 10:55:00'),(5,'2021-02-23 07:16:00'),(2,'2021-02-22 11:21:00'),
(1,'2021-02-11 08:23:00'),(2,'2021-02-12 08:15:00');

-- 查找迟到的学生
SELECT date_sub(now(),INTERVAL DAYOFMONTH(NOW())-1 DAY);
SELECT * FROM attendance WHERE time(create_at) > '08:30:00'
AND date(create_at) > date(date_sub(now(),INTERVAL dayofmonth(now())-1 DAY )); 

-- 迟到两次的同学
SELECT stu_id,count(id) FROM attendance WHERE time(create_at) > '08:30:00'
AND date(create_at) > date(date_sub(now(),INTERVAL dayofmonth(now())-1 DAY ))
GROUP BY stu_id HAVING COUNT(id) >= 2; 
