<?php
$filename = '64.txt';
// file_exits()判断文件是否存在
// var_dump(file_exists($filename));
// w写入模式打开,将指针置于开头并将文件清空,若不存在将新建 二进制wb
// w+读写模式将指针置于开头并清空文件,若不存在将新建文件  二进制w+b
$handle = fopen($filename,'w+');
// var_dump($handle);
fwrite($handle,'虫宝');
// 调整指针
fseek($handle,0);
echo fread($handle,filesize($filename)); // 虫宝
// 关闭资源
fclose($handle);