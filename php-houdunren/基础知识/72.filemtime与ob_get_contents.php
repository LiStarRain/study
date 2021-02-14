<?php
date_default_timezone_set('PRC');
// filemtime() 获取文件的修改时间的时间戳
// echo date('Y-m-d H:i:s',filemtime('71.txt'));
echo time();

// ob_start()开启一个缓冲区
// ob_get_contents()可以将文件内容取出 都只剩html没有后台操作了
// ob_get_clean()可以将文件内容取出后清除