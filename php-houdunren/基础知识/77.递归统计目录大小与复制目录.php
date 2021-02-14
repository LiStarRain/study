<?php
// 统计文件大小
// function dirSize(string $dir) :int {
//   $size = 0;
//   foreach(glob($dir.'/*') as $file) {
//     $size += is_file($file) ? filesize($file) : dirSize($file);
//   }
//   return $size;
// }
// echo dirSize('..');

// 复制目录
function copyDir($dir,$to):bool {
  is_dir($to) or mkdir($to,0755,true);
  foreach(glob($dir.'/*') as $file) {
    $target = $to.'/'.basename($file);
    is_file($file) ? copy($file,$target) : copyDir($file,$target); 
  }
  return true;
}
// copy('.','test');