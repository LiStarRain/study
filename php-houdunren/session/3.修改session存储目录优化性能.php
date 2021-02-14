<?php
// 设置session文件存储的目录
session_save_path('./session');
session_start();
// 查看session文件的存储目录
echo session_save_path();
$_SESSION['name'] = 'ame';