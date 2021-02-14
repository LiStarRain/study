<?php
// a追加模式 写入方式打开,指针置于末尾,不存在就创建之 二进制 ab
// a+追加模式 读写方式打开,指针置于末尾,不存在就创建之  二进制 a+b
// $filename = '65.txt';
// $handle = fopen($filename, 'a+');
// fwrite($handle,'ame and 虫宝');

// x 创建并以写入方式打开,将文件指针置于开头,若文件已经存在,fopen调用失败返回false
// x+ 创建并以读写方式打开,指针置于开头,文件存在则fopen返回false
$filename = '65.txt';
$handle = @fopen($filename,'x+');
var_dump($handle);