<?php
$db = [
  'name'=>'ame',
  'age'=>16
];
// 用来帮我们生成网站的配置文件
$config = var_export($db,true);
echo $config;
// 存起来
file_put_contents('74.test.php','<?php return '.$config.';');

$data = include '74.test.php';
echo $data['name'];