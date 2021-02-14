<?php
// 获取磁盘总大小 单位：字节
// echo disk_total_space('.');
// 获取可用空间大小 单位:字节
// echo disk_free_space('.');

function space_total(int $total) :string {
  $config = [3=>'GB',2=>"MB",1=>'KB'];
  foreach($config as $num=>$unit) {
    if($total > pow(1024,$num)) {
      return round($total/pow(1024,$num)).$unit;
    }
  }
  return $total.'B';
}

echo space_total(disk_free_space('.')).'<hr/>';
echo space_total(disk_total_space('.')).'<hr/>';