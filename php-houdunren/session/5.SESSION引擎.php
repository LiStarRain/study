<?php
include './FileHandle.php';
// 设置自定义会话存储函数
session_set_save_handler(new FileHandle('ame'));
session_start();