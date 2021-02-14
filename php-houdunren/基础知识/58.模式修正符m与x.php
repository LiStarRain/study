<?php
// 对多行字符串进行单行处理，每一行一行处理
// $str = <<<test
// #1
// ame
// @#3
// rain
// #2
// 虫宝大叔
// test;
// $preg = '/#\d+/m';
// echo preg_replace($preg,'',$str);

// x 忽略正则表达式中的空白和#
$str = 'abc';
$preg = '/^a\w+ #这是一条注释  /x';
echo preg_replace($preg,'',$str);


