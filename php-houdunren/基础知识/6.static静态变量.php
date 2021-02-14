<?php
function test() {
  // static 定义静态变量 对比JS中函数的静态变量需要借助闭包实现
  static $num = 1; // 可以理解为该语句只执行一次后常驻内存
  $num = $num + 1;
  return $num.'<hr/>';
}
echo test(); // 2
echo test(); // 3
echo test(); // 4