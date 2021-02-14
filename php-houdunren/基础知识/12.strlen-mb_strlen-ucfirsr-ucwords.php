<?php
// 删除字符串左右的指定字符（默认去除空格）
// $str = ' ame ';
// echo strlen($str); // 5
// echo '<hr/>';
// echo strlen(trim($str)).'<hr/>'; // 3
// 第二个参数可以传入需要删除的字符的 列表
// echo trim($str,' ea'); // m
// echo '<hr/>';
// 只删除右边的指定字符
// echo strlen(rtrim($str,' e')); // 3
// echo '<hr/>';
// 只删除左边的指定字符
// echo strlen(ltrim($str,' a')); // 3
// echo '<hr/>';

// 字符串转小写
// echo strtolower('AME').'<hr/>';
// 字符串转大写
// echo strtoupper('ame').'<hr/>';
// 把单词首字母变成大写
// echo ucfirst('do something').'<hr/>'; // Do someting
// 把每个单词的首字母进行大写
// echo ucwords('do something').'<hr/>'; // Do Something
// 第二个参数可以传入分隔符
echo ucfirst('rain|ame').'<hr/>'; // Rain|ame
echo ucwords("ame|rain","|").'<hr/>'; //Ame|Rain