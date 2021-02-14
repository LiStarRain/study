<?php
// 数组合并
// $arr1 = [1,2,3];
// $arr2 = [2,3,4];
// $arr = array_merge($arr1,$arr2);
// print_r($arr);

// $arr1 = [
//   'name'=>'ame',
//   'age'=>22
// ];
// $arr2 = [
//   'name'=>'rain',
//   'sex'=>'male'
// ];
// $arr = array_merge($arr1,$arr2);
// print_r($arr);

// array_change_key_case 将数组的键名转为大小写
$arr = [
  'name'=>'rain',
  'sex'=>'male'
];
// 将键名都转为大写
$arr = array_change_key_case($arr, CASE_UPPER);
print_r($arr);