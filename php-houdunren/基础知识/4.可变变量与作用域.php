<?php
// $name = 'ame';
// 系统会将$name进行解析 相当于$ame = 'rain'
// $$name = 'rain';
// echo $ame; // rain
// echo $$name; // rain

// 作用域（变量作用范围）
// 超全局变量 可以在代码的任何位置都可以访问
$name = 'ame';
var_dump($_GET); // 获取地址栏GET提交
function show() {
  // print_r($_GET); // 也能访问，php不像JS存在作用域链
  // echo $name; // 不能访问，php不像JS存在作用域链，不好使

  // 可以使用 global关键字将变量变为全局变量引入，不建议使用，会变量污染
  // global $name;
  // 输出并换行
  // print_r($name); // ame

  // 建议使用$GLOBALS数组来获取全局变量
  print_r($GLOBALS['name']); // ame
}
show();
