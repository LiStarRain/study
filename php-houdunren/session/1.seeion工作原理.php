<?php
// 必须要先开启会话才能使用session
// session_start() 可以开启会话
session_start();
// 我们这里使用文件的方式来存储session
// 使用$_SESSION可以获取或为session分配数据
$_SESSION['passowrd'] = '123456';
print_r($_SESSION);