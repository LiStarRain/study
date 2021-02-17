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
  // 预准备
  $sth = $pdo->prepare("INSERT INTO stu (sname,class_id,birthday,sex) 
  VALUES (:sname,1,'1999-07-12 11:32:21',2)");
  // 绑定参数并执行
  $sth->execute([':sname'=>'小辣椒']);
  echo $pdo->lastInsertId();
} catch (PDOException $e) {
  die($e->getMessage());
}