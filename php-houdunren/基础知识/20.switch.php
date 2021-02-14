<?php
// $status = 'success';
// switch($status) {
//   case 'success':
//     echo 'success';
//     break;
//   case 'error': 
//     echo 'error';
//     break;
//   // 前面都不匹配则执行到最后一项
//   default: 
//     echo 'default';
// }

$age = 20;
// switch($age) {
//   case $age < 10:
//     echo '儿童';
//     break;
//   case $age < 30:
//     echo '青年';
//     break;
//   default:
//     echo '中年';
// }
// 简写
switch($age):
  case $age < 10:
    echo '儿童';
    break;
  case $age < 30:
    echo '青年';
    break;
  default:
    echo '中年';
endswitch;