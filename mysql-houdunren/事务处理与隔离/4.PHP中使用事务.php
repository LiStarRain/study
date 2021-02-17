<?php
// 定义数据库配置项
$config = [
  'host'=>'localhost',
  'user'=>'root',
  'password'=>'',
  'database'=>'ame',
  'charset'=>'utf8'
];
// 连接参数
$dns = sprintf(
  "mysql:host=%s,dbname=%s;charset=%s",
  $config['host'],
  $config['database'],
  $config['charset']
);
try {
  // 创建链接
  $pdo = new PDO($dns,$config['user'],$config['password']);
  // 使用异常处理
  $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  var_dump($pdo);
} catch (PDOException $e) {
  die($e->getMessage()); 
}

try {
  // 开启事务
  $pdo->beginTransaction();
  // 执行sql语句
  $pdo->exec('SELECT * FROM stu');
  // 提交事务
  $pdo->commit();
} catch (Exception $e) {
  // 有错误则回滚，撤销事务
  $pdo->rollBack();
  die($e->getMessage());
}