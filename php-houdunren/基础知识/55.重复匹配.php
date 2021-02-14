<?php
// *零个或者多个字符 +一个或者多个字符 ?0个或者一个
// $str = '';
// $status = preg_match('/^.*$/',$str);
// echo $status; // 1

// {}限定字符
// $str = '121212';
// $status = preg_match('/^\d{2,}$/',$str); // 2个或多个
// echo $status; //1

// $str = '121212';
// $status = preg_match('/^\d{2,6}$/',$str); // 2个到6个包含6个
// echo $status; //1

$str = 'https://wasser.net.cn';
$preg = '/https?:\/\/(.+)\.(com|cn|org)/'; // 单引号不会对字符进行转义双引号会
$status = preg_match($preg,$str);
echo $status; // 1