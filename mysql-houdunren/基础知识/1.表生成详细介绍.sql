-- show databases;
-- 切换数据库
USE ame;
-- 新建表
CREATE TABLE class (
	--  id作为主键,并且自增保证唯一性
	id int PRIMARY KEY AUTO_INCREMENT,
	-- 	30字符长度的字符串作为课程名称，并且不能为空
	cname VARCHAR(30) NOT NULL,
	-- 	100字符长度字符串作为课程描述，该字段允许为空
	description VARCHAR(100) NULL
)charset utf8;

-- 查看表结构
DESC class;

-- 删除表
-- DROP TABLE IF EXISTS class;

-- 查看所有表
-- SHOW TABLES;

-- 查看数据库结构
-- SHOW CREATE DATABASE ame;