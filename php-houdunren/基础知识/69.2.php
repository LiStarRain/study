<?php
$handle = fopen('68.txt','w+');
$status = flock($handle,LOCK_EX|LOCK_NB,$wouldblock); // 如果锁不成功返回false
var_dump($status);
var_dump($wouldblock);
if($status) {
  fwrite($handle,'houdunren');
} else {
  echo '文件被占用!';
}