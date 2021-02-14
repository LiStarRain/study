<?php
// 设置默认时区
date_default_timezone_set('PRC');
// 获取默认时区
// echo date_default_timezone_get();

// 不改时区默认使用的0时区 获取当前时间
echo date('Y-m-d H:i:s');