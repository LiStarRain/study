-- show databases;
-- �л����ݿ�
USE ame;
-- �½���
CREATE TABLE class (
	--  id��Ϊ����,����������֤Ψһ��
	id int PRIMARY KEY AUTO_INCREMENT,
	-- 	30�ַ����ȵ��ַ�����Ϊ�γ����ƣ����Ҳ���Ϊ��
	cname VARCHAR(30) NOT NULL,
	-- 	100�ַ������ַ�����Ϊ�γ����������ֶ�����Ϊ��
	description VARCHAR(100) NULL
)charset utf8;

-- �鿴��ṹ
DESC class;

-- ɾ����
-- DROP TABLE IF EXISTS class;

-- �鿴���б�
-- SHOW TABLES;

-- �鿴���ݿ�ṹ
-- SHOW CREATE DATABASE ame;