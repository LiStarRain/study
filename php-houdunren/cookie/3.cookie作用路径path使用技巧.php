<?php
// 第四个参数可以设置cookie的作用路径，当访问该路径下的php文件时cookie才能被浏览器发送过来
// 服务器上可以使用cookie的路径。如果设置为“/”，则cookie将在整个范围内可用
// 优先读取当前路径下有权限的cookie,没有再往上找
setcookie('username','lsr',0,'/app'); // 该cookie在/app目录下的文件才能被访问