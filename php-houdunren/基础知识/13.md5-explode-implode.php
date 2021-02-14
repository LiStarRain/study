<?php
// 把字符串哈希为32位十六进制字符
// echo md5('ame').'<hr/>'; // 347a11d1e4d12e53ac0b397425571aca

// $file = 'user/1/info';
// 包含特殊字符不能作为文件名的字符串我们可以给他哈希一下
// echo md5($file).'.php'.'<hr/>';

// 拆分字符串 第一个参数为分隔符 第二个参数为需要拆分的字符串 返回一个数组 类似于JS数组的split
// $arr = explode('|','ame|rain');
// echo $arr[0].'<hr/>';
// echo $arr[1].'<hr/>';
// $file = 'card.png';
// $arr = explode('.', $file);
// print_r($arr);

// 将数值项以指定连接符合并字符串 类似于JS数组的join
// $arr = ['test', 'html'];
// echo implode('.', $arr).'<hr/>'; // test.html

// 截取字符串 传入字符串 开始位置 以及返回的字符个数
// $file = 'user.jpg';
// echo substr($file, 0, -4);
// 可以用 mb_substr 设置字符串指定编码
$ad = '大家好，我是你爹';
// 不穿第三个参数默认全部截取
echo mb_substr($ad, 1, 3, 'utf8');
