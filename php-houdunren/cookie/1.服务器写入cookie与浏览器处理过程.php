<?php
// setcookie() 可以用来向客户端浏览器存储cookie数据
setcookie('username','ame');
// 使用$_COOKIE超全局数组可以获取cookie数据
print_r($_COOKIE);