USE ame;

SELECT * FROM attendance WHERE date(create_at) >= date(date_add(now(),INTERVAL 0-weekday(now()) DAY))
AND TIME(create_at) >= '08:30:00'; 