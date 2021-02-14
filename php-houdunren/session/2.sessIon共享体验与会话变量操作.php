<?php
session_start();
print_r($_SESSION);
$_SESSION['name'] = 'ame';
// 删除变量
unset($_SESSION['name']);
// 全删除
// $_SESSION = []; // 把文件数据删掉
// session_destroy(); // 直接把文件删掉
print_r($_SESSION);