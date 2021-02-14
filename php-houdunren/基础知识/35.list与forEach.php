<?php
// 索引数组
// $arr = ['ame','rain'];
// 类似于解构赋值
// list($a,$b) = $arr;
// echo $a;

// 关联数组
// $user = ['name'=>'ame','age'=>11];
// list('name'=>$name,'age'=>$age) = $user;
// echo $age;

// 只取某一个
// $arr = ['ame','rain','lsr'];
// list(,,$name) = $arr;
// echo $name;

// $users = [
//   ['name'=>'ame','age'=>16],
//   ['name'=>'rain','age'=>22],
//   ['name'=>'lsr','age'=>21],
//   ['name'=>'kjy','age'=>21],
//   ['name'=>'lxy','age'=>19]
// ];
// while(list('name'=>$name,'age'=>$age) = current($users)):
//   echo "name:{$name}, age:{$age}";
//   next($users);
// endwhile;

// foreach
$users = [
  ['name'=>'ame','age'=>16],
  ['name'=>'rain','age'=>22],
  ['name'=>'lsr','age'=>21],
  ['name'=>'kjy','age'=>21],
  ['name'=>'lxy','age'=>19]
];
// 遍历数组
foreach($users as $key=>$user) {
  echo $key.'='.$user['name'].'<br/>';
}
