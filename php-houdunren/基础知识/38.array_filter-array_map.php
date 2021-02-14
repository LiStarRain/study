<?php
// 数组过滤返回符合条件的数组项组成的新数组
// $users = [
//   ['name'=>'ame', 'age'=>16],
//   ['name'=>'rain', 'age'=>22],
//   ['name'=>'aki', 'age'=>23]
// ];
// $filterUsers = array_filter($users,function($user) {
//   return $user['age'] > 20;
// });
// print_r($filterUsers);

// array_map 数组元素映射
$users = [
  ['name'=>'ame', 'age'=>16],
  ['name'=>'rain', 'age'=>22],
  ['name'=>'aki', 'age'=>23]
];
// $mapUsers = array_map(function($user){
//   unset($user['age']);
//   return $user;
// }, $users);
// print_r($mapUsers);

// $names = array_map(function($user) {
//   return $user['name'];
// },$users);
// var_dump($names);

// 返回数组的元素值
$stringUsers = array_map(function($user){
  return implode('-',array_values($user));
},$users);
print_r($stringUsers);