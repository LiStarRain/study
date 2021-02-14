<?php
// 单引号定义的字符串不可以插入变量，但双引号定义的字符串可以
$name = 'ame';
echo 'name:$name'.'<hr/>'; // name:$name
echo "name:$name".'<hr/>'; // name:ame
// 最好用{}将变量与其它字符串隔开
echo "name:{$name}".'<hr/>'; // name:ame 别混了JS中的字符串模板: `${name}`

// 通过响应头设置网页编码
header('Content-Type:text/html;charset=utf-8');
echo 'hello'; // hello