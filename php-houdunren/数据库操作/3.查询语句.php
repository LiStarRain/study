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
  // 将返回的字段名设置为全大写、小写或者正常
  $pdo->setAttribute(PDO::ATTR_CASE,PDO::CASE_UPPER);
  // 对返回结果进行多样设置，关联数组
  // $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
  // 对返回结果进行多样设置，索引数组
  // $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_NUM);
  // 对返回结果进行多样设置，对象
  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
  // 查询语句
  $query = $pdo->query("SELECT * FROM stu");
  // 获取所有查询到的数据
  $rows = $query->fetchAll();
  echo $rows[0]->SNAME;
} catch (PDOException $e) {
  die($e->getMessage());
}