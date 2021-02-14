<?php
// $handle = fopen('67.txt','rb');
// feiof()可以判断文件读取是否结束
// while(!feof($handle)) {
//   echo fread($handle,1);
// }
// fgetc()函数每次只读取一个字符
// while (!feof($handle)) {
//   echo fgetc($handle);
// }

// fgets()每次读取一行,可以设置读取多少个字符
// echo fgets($handle,4);
// while(!feof($handle)) {
//   echo fgets($handle);
// }

// fgetcsv()读取分割符文件并返回一个数组
$handle = fopen('67.test.txt','rb');
$res = fgetcsv($handle,',');
print_r($res);