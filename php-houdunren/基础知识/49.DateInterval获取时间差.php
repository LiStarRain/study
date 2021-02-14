<?php
// $dateTime1 = new DateTime();
// $dateTime2 = new DateTime('2021-04-30 16:33:16');
// 获取时间差
// $interval = $dateTime1->diff($dateTime2);
// $format = '距离你的生日还有%m个月%d天%h小时，共有%a天';
// echo $interval->format($format);

date_default_timezone_set('PRC');
$dateTime = new DateTime();
// 生成时间间隔 以P开头
$interval = new DateInterval('P2DT2H5M');
$dateTime->add($interval);
echo $dateTime->format('Y-m-d H:i:s').'<hr/>';
// 减少
$dateTime->sub($interval);
echo $dateTime->format('Y-m-d H:i:s');