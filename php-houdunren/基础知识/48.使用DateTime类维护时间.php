<?php
// date_default_timezone_set('PRC');
// 实例化一个时区
// $prc = new DateTimeZone('PRC');
// DateTime类管理时间
// $dateTime = new DateTime('2020-2-11 11:11:11');
// $dateTime->setTimezone($prc);
// $dateTime->setDate(2021,2,6);
// $dateTime->setTime(16,40,9); 
// print_r($dateTime);
// 显示时间戳
// $timeStamp = $dateTime->format('U');
// echo date('Y-m-d H:i:s',$timeStamp);

// 静态方法
$time = DateTime::createFromFormat('Y-m-d H:i:s', '2020-1-1 16:22:31');
echo $time->format('Y-m-d H:i:s');