<?php
// $a = 'ame';
// echo $a ? 'hello' : 'sb';

$name = 'ame';
// echo $name ? 'yes' : 'no';
// ?? 变量非空时输出变量
// echo $name??'no';
// 相当于
// echo isset($name) ? $name : 'no'; // 自己会 isset isnull
// @可以屏蔽警告错误
echo @(20/0);