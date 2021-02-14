<?php
// $time = strtotime('2010-02-12 15:21:20'); //将字符串转为时间戳
// echo date('Y-m-d H:i:s', $time);

// 将当前时间转为时间戳
// echo strtotime('NOW');

// 可以进行时间计算
// echo date('Y-m-d H:i:s',strtotime('+1 year +55 day'));
// 下周五
echo date('Y-m-d H:i:s',strtotime('next friday'));