<?php
// 使用严格模式可以不让它进行类型转换
declare(strict_types = 1);
// 参数类型约束
// function show(int $num) {
//   return $num;
// }
// var_dump(show('2')); // 报错

function sum(int ...$nums) {
  return array_sum(($nums));
}
// 捕获错误
try {
  echo sum(1, 2, 3);
} catch(\Throwable $th) {
  echo $th->getMessage();
}