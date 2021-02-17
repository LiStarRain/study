<?php
include './DB.php';
use \Database\DB;

try {
  $config = [
    'host'=>'127.0.0.1',
    'user'=>'root',
    'password'=> 'ame990430',
    'charset'=>'utf8',
    'database'=>'ame'
  ];
  $db = new DB($config);
  header('Content-type: application/json');
  echo json_encode($db->query('SELECT * FROM stu'));
} catch (Exception $e) {
  die($e->getMessage());
}