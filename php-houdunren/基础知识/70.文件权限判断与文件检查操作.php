<?php
// is_writable() 判断文件有没有写入权限
var_dump(is_writable('68.txt')); // true
// is_readable() 判断文件有没有写入权限
var_dump(is_readable('68.txt')); // true 
// file_exists() 判断目录和文件是否存在
var_dump(file_exists('.')); // true
// is_file() 判断文件是否存在
var_dump(is_file('68.txt'));
// is_dir() 判断目录是否存在
var_dump(is_dir('./')); // 判断目录是否存在
