<?php
// function sum() {
//   return '哈哈';
// }
// $callback = 'sum';
// echo $callback().'<hr/>'; // 把$callback的值读取出来，然后执行。相当于sum()

$file = 'ame.gif';
$action = trim(strchr($file, '.'), '.');
$action = strtolower($action);
// echo $action;

function jpg() {
  return 'jpg function';
}

function png() {
  return 'png function';
}
// 看下是否有这个函数
if (function_exists($action)) {
  echo $action($file);
} else {
  echo '该函数不存在';
}