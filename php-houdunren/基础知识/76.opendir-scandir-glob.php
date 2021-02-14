<?php
// opendir() 可以打开一个目录
$handle = opendir('.');
var_dump($handle);
// 读取目录
// while($file = readdir($handle)) {
//   if(!in_array($file,['.','..'])){
//     // filetype可以获取文件类型
//     echo filetype($file)."\t\t".$file.'<hr/>';
//   }
// }

// scandir() 用于扫描目录
// $files = scandir('.');
// foreach ($files as $file) {
//   if(!in_array($file,['.','..'])){
//     // filetype可以获取文件类型
//     echo filetype($file)."\t\t".$file.'<hr/>';
//   }
// }

// 读取所有文件
$files = glob('./*',GLOB_MARK); // 加入目录连接符
// print_r($files);
foreach ($files as $file) {
  if(!in_array($file,['.','..'])){
    // filetype可以获取文件类型
    echo filetype($file)."\t\t".$file.'<hr/>';
  }
}