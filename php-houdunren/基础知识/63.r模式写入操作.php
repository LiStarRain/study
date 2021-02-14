<?php
// 二进制文件用r+b
$handle = fopen('62.txt', 'r+b'); // 读写方式打开将指针指向文件开头 追加模式
// 写入文件
fseek($handle,filesize('62.txt'));
$res = fwrite($handle,'虫宝');
fseek($handle,0);
echo fread($handle,filesize('62.txt'));