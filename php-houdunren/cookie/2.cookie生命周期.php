<?php
// 第三个参数可以设置过期时间的时间戳 当时间是过去的时候cookie会被删除掉
setcookie('username','rain',time() + 60 * 60 * 24);