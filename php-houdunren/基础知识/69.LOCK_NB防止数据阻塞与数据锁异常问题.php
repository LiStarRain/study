<?php
$handle = fopen('68.txt','rb');
flock($handle,LOCK_SH); // 防止阻塞
echo fread($handle,filesize('68.txt'));
sleep(3);
flock($handle,LOCK_UN);
fclose($handle);