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
  $rows = $pdo->query('SELECT * FROM stu WHERE id >= 2');
  // 单条读取查询到的数据
  while ($field = $rows->fetch(PDO::FETCH_OBJ)) {
    echo $field->sname.'<hr/>';
  }
} catch (PDOException $e) {
  die($e->getMessage());
}