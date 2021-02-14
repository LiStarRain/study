<?php
$handle = fopen('68.txt','rb');
// 为了防止数据脏读,我们可以将文件锁住
flock($handle,LOCK_SH); // LOCK_SH取得共享锁定(读取的程序) LOCK_EX取得独占锁定(写入的程序)
echo fread($handle,filesize('68.txt'));
// 释放锁定
flock($handle,LOCK_UN);
fclose($handle);