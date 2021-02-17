USE ame;

-- 设置我们的显示位数只能是5位，并不是只能存储5位数
ALTER TABLE class ADD status int(5);

-- 填充前导0
ALTER TABLE class ADD state int(5) ZEROFILL;

