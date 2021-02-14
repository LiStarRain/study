<?php
$arr = [1,2,3];
// array_push($arr,'4'); // 压入
// print_r($arr);
// $num = array_pop($arr); // 弹出
// echo $num;
array_unshift($arr, 0); // 加到数组前面
// print_r($arr);
$item = array_shift($arr); //  从前面弹出
// echo $item; // 0
// 数组长度
echo count($arr); // 3