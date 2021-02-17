USE ame;

-- 添加时间戳字段，默认值为当前时间的时间戳
ALTER TABLE stu ADD updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP;
-- 不能超出时间戳所表示的范围
UPDATE stu SET updated_at = '1976-02-22 08:22:33' WHERE id = 1;
-- 更改名字时时间不会随之刷新
UPDATE stu SET sname = 'Rain' WHERE id = 3;
-- 删除字段
ALTER TABLE stu DROP updated_at;

-- 当该条数据更新时自动更新时间
ALTER TABLE stu ADD updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP;
SELECT * FROM stu;