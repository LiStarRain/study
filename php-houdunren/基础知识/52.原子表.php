<?php
// 原子表 [abc] 字符串中包含任何一个
// echo preg_match('/abc/','bc'); // 0
// echo preg_match('/[abc]/','bc'); // 1

// $status = preg_match('/[6-9]/',7);
// $status = preg_match('/[a-zA-Z]/',' Z');
// echo $status; // 1

// .  匹配除了换行符外的任何字符
// $status = preg_match('/./','fsd sdrfA@');
// echo $status;

// 取反
// $status = preg_match('/[^678]/',62);
// echo $status; // 1

// 按正则表达式切分字符串
$str = '1.jpg@2.jpg#3.jpg';
echo implode(',', preg_split('/[@#]/',$str));
