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
  // 创建连接，并更改错误处理模式
  $pdo = new PDO($dsn,$config['user'],$config['password'],
  [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
  // 通过函数设置错误处理模式。异常、警告以及不显示错误
  $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  var_dump($pdo);
} catch (PDOException $e) {
  die($e->getMessage());
}