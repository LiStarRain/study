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
  // 解决SQL注入
  // 预准备，使用命名符
  $sth = $pdo->prepare("SELECT * FROM stu WHERE id = :id");
  // 绑定参数并执行
  $sth->execute([':id' => "{$_GET['id']}"]);
  // 读取数据
  print_r($sth->fetchAll(PDO::FETCH_OBJ));
} catch (PDOException $e) {
  die($e->getMessage());
}