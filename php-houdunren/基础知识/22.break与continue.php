<?php
// break 跳出循环
// do {
//   if(!isset($num)) {
//     $num = 10;
//   }
//   if ($num == 0) {
//     break;
//   }
//   echo $num--.'<br/>';
// } while(true);

// $num = 10;
// while(true) {
//   $num++;
//   switch ($num) {
//     case $num % 2 == 0:
//       echo $num.'<hr/>';
//       break;
//     case $num % 15 == 0:
//       echo $num.'<hr/>';
//       break 2; // 跳出第二层循环
//   }
// }

// 跳出当前循环并开始下一次循环
for ($num = 10; $num > 0; $num--) {
  if ($num % 2 == 0) continue;
  echo $num.'<hr/>';
}