<?php
date_default_timezone_set('PRC');
// 获取当前时间的时间戳 返回10位数字表示的秒数
// echo time();
// 微秒
// echo microtime(true); // 存为浮点类型

// 计算运行时间
function runtime($start = null, $end = null) {
  static $cache = [];
  if (is_null($start)) {
    return $cache;
  }elseif(is_null($end)) {
    return $cache[$start] = microtime(true);
  } else {
    $end = $cache[$end]??microtime(true);
    return $end - $cache[$start];
  }
}

runtime('for');
for($i=0;$i<200000;$i++) {}
runtime('forEnd');
echo runtime('for','forEnd');