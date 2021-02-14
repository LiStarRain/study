<?php
// 弱类型 与js一样不用约束变量类型
// $name = 'ame';
// var_dump($name);
// $name = 100;
// 打印变量详细信息
// var_dump($name);

// 变量用$定义 以字母或下划线开头 后面跟字母数字下划线
// $age = 99;
// var_dump($age);
// $_ = 'test';
// var_dump($_);

// 传值
// $a = 1;
// $b = $a;
// $b = 99;
// var_dump($a); // 1
// var_dump($b); // 99

// 传址
$a = 1;
// 把a的地址复制给b
$b = &$a;
$b = 99;
var_dump($a); // 99
var_dump($b); // 99

