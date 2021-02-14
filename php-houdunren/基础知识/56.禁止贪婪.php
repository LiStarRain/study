<?php
// $str = '123456';
// preg_match('/\d+/',$str,$matches);
// print_r($matches);

$str = '<h1>你好</h1><h1>憨批</h1>'; 
$preg = '/<h1>.+?<\/h1>/';
// 匹配全部字符串
preg_match_all($preg,$str,$matches);
print_r($matches);
