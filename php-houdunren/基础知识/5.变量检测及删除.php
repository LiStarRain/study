<?php
// 使用isset()函数检测变量是否被定义
// var_dump(isset($name)); // false
// $name = 'ame';
// var_dump(isset($name)); // true
// unset()函数来删除变量
// unset($name);
// var_dump(isset($name)); // false

// 删除全局变量
$name = 'ame';
function test() {
  // global $name;
  // echo $name; // ame
  // unset($name); // global引入的全局变量是删除不掉的
  
  // 使用$GLOBALS可以删除外部的全局变量
  unset($GLOBALS['name']);
}
test();
print_r($name);