<?php
header('Content-type:text/html;charset=utf-8');
// 配置项
$config = [
  'host'=>'127.0.0.1',
  'user'=>'root',
  'password'=>'ame990430',
  'database'=>'ame',
  'charset'=>'utf8'
];
$dsn = sprintf("mysql:host=%s;dbname=%s;charset=%s",$config['host'],$config['database'],$config['charset']);

try {
  $pdo = new PDO($dsn,$config['user'],$config['password']);
  // 通过函数设置错误处理模式。异常、警告以及不显示错误
  $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  // 执行sql插入语句
  $pdo->exec("INSERT INTO stu (sname,class_id,birthday,sex) 
  VALUES ('小刚',1,'1987-07-12 12:32:21',1)");
  // 获取最后自增的主键
  echo $pdo->lastInsertId();
  // 更新语句
  // echo $pdo->exec("UPDATE stu SET sex = 2 WHERE sname = '小刚'");
  // 删除语句
  // echo $pdo->exec('DELETE FROM stu WHERE sname="小刚"');
} catch (PDOException $e) {
  die($e->getMessage());
}