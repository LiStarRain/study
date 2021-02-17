USE ame;

-- 从左边和右边取cname字段数据的两个字符，从中间取一个字符,取第二个字符后的所有字符
SELECT LEFT(cname,2),RIGHT(cname,2),MID(cname,2,1),mid(cname,2) FROM class;

-- 截取字符串
SELECT substring(cname,2,3) FROM class;

-- 获取字符串的长度
SELECT char_length(cname) FROM class;

-- 连接字符串
SELECT concat('编号:',id) AS id FROM class;

-- 长度超过5个字符，用点连接
SELECT IF(char_length(description)>5,concat(substring(description,1,5),'...'),description) AS res FROM class;