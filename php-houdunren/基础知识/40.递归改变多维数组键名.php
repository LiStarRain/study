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

function my_array_change_key_case(array $arr, $type='CASE_UPPER') :array {
  foreach($arr as $key=>$value) {
    // 使用变量函数
    $action = $type == 'CASE_UPPER' ? 'strtoupper' : 'strtolower';
    // 删除老变量
    unset($arr[$key]);
    $arr[$action($key)] = is_array($value) ? my_array_change_key_case($value) : $value;
  }
  return $arr;
}
print_r(my_array_change_key_case($users));