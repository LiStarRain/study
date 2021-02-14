<?php
// U禁止贪婪
// $str = '<h1>虫宝</h1><h1>憨批</h1>';
// $preg = '/<h1>.*<\/h1>/U';
// preg_match_all($preg,$str,$matches);
// print_r($matches);

// 验证邮箱 A 开始限定(类似于^)
// $str = '1637516330@qq.com';
// $preg = '/\w+@[\w\.]+/A';
// preg_match_all($preg,$str,$matches);
// print_r($matches); 

// D 限定字符后不能有换行符
$str = "1a\n";
$preg = '/\d+a$/D';
preg_match_all($preg,$str,$matches);
print_r($matches);