<?php
// $name = 'ame';
// function show(&$name) {
  // global 引入 不建议，因为会全局污染
  // global $name;
  // echo $name;

  // 超全局数组
  // echo $GLOBALS['name'];

  // 传址
  // echo $name;
// }
// show();

// 静态变量
function sum(int ...$nums) {
  static $count = 0; // 只执行一次就常驻内存
  return $count += array_sum($nums);
}
echo sum(1, 2, 3).'<hr/>'; // 6
echo sum(1, 2, 3).'<hr/>'; // 12
echo sum(1, 2, 3).'<hr/>'; // 18