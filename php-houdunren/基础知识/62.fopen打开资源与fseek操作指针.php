<?php 
// fopen()打开文件
$filename = '62.txt';
// 打开文件并把指针指向最前 二进制文件或影音文件使用rb模式
$handle = fopen($filename,'r'); // r 只读模式
// 读取两个字节
// echo  fread($handle,2);
// 全部读取
// filesize()可以获取文件大小
// echo fread($handle,filesize($filename));
// 注意是从指针处开始读取
// echo fread($handle,3);
// echo fread($handle,4);

// feesk()可以设置指针
fseek($handle,4);
echo fread($handle,filesize($filename)); // and rain