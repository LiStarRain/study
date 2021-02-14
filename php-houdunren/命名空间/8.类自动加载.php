<?php
// 一般命名空间与目录是匹配的
// spl_autoload_register() 当类不存在时自动执行 可以用来自动给引入文件
spl_autoload_register(function($class) {
  // echo $class;
  $file = str_replace('\\','/',$class);
  echo $file;
  require $file;
});


User::make();