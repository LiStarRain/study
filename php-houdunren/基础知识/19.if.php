<?php
// $status = false;
// 条件为真执行代码块 否则执行另一个代码块
// if ($status) {
//   echo '虫宝';
// } else {
//   echo '憨批';
// }
// 简写一下
// if ($status):
//   echo '虫宝';
// else:
//   echo '饿了';
// endif;

$age = 10;
if ($age < 15) {
  echo '儿童';
} elseif ($age < 30) {
  echo '青年';
} elseif ($age < 45) {
  echo '中年';
} else {
  echo '老年';
}