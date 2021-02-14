<?php
session_save_path('./session');
// 设置存储在客户端cookie的SESSID
// session_name('username');
// 设置存储在客户端cookie的SESSID的value值
// session_id('ame');
session_start();
// session_name() 可以查看浏览器携带的sessId
echo session_name();
// session_id() 可以查看浏览器端SESSID所对应的value值
echo session_id();