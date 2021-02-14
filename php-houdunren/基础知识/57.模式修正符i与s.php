<?php
// i不区分大小写
// $str = '<h1>你好</h1><H1>憨批</H1>';
// $preg = '/<h([1-6])>.*?<\/h\1>/i';
// preg_match_all($preg,$str,$matches);
// print_r($matches);

// s单行模式 忽略换行符
$str = '<h1>
哈哈
</h1>';
$preg = '/<h1>.*?<\/h1>/is';
preg_match_all($preg,$str,$res);
print_r($res); // 哈哈