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
  $pdo = new PDO($dsn,$config['user'],$config['password'],
  [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ]);
  // 预准备，使用占位符
  $sth = $pdo->prepare("SELECT * FROM stu WHERE id >= ? AND id <= ?");
  // 绑定参数并执行，占位符注意顺序
  $sth->execute([$_GET['begin'],$_GET['end']]);
  print_r($sth->fetchAll());
} catch (PDOException $e) {
  die($e->getMessage());
}