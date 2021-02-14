<?php
// 第六个参数表示cookie是否应仅通过客户端的安全HTTPS连接传输
setcookie('username','ame',0,'/','php7.video',true);
// 第7个参数可以有设置cookie能否通过js来操作
setcookie('username','ame',0,'/','php7.video',false,true);
