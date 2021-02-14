<?php
// 默认参数
function mobile($tel, $num=4, $fix='*') {
  return substr($tel, 0, -$num).str_repeat($fix, $num);
}
echo mobile(12345678901, 2);

// 传值
// $var = 1;
// function show($var) {
//   echo ++$var;
// }
// show($var); // 2
// echo $var; // 1

// 传址
// $var = 1;
// function show(&$var) {
//   echo ++$var;
// }
// show($var); // 2
// echo $var; // 2

// 点语法
// function sum($num1, $num2) {
//   return $num1 + $num2;
// }

// function sum(...$vars) {
//   print_r($vars);
//   return array_sum($vars);
// }
// echo sum(1, 2, 3);


