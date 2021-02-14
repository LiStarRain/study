<?php
$users = [
  'name'=>'ame',
  'age'=>21,
  'sex'=>'male',
  'grade'=>[
    'chinese'=>121,
    'engish'=>125,
    'math'=>110
  ]
];
// array_walk_recursive()用来递归处理函数
array_walk_recursive($users, function(&$value,$key,$type) {
  // var_dump($type);die;
  $action = $type == 'CASE_UPPER' ? 'strtoupper' : 'strtolower';
  $value = $action($value);
},'CASE_UPPER');
print_r($users);