<?php
// $str = 'https://www.bilibili.com 哔哩哔哩 http://www.baidu.com 百度';
// $preg = '/\.(baidu|bilibili)/';
// $replace = '.wasser';
// echo preg_replace($preg,$replace,$str);

$str = 'https://www.bilibili.com 哔哩哔哩 http://www.baidu.com 百度';
$preg = '/https?:\/\/\w+\.(bilibili|baidu)\.(com|cn)/';
$replace = '<a href="\0">\1</a>';
echo preg_replace($preg,$replace,$str);