<?php
// 向上取整
// echo ceil(10.2); // 1
// 向下取整
// echo floor(10.9); // 10
// 取最大值
// echo max(1, 2, 3); // 3
// 四舍五入
// echo round(10.5); // 11
// 取随机数
// echo mt_rand(1,10); // 注意是闭区间

// 生成验证码
// function code(int $len=5) :string {
//   $str = '1234567890amerainlsrx';
//   $code = null;
//   for ($i=0; $i < $len; $i++) {
//     $index = mt_rand(0,strlen($str)-1);
//     $code .= $str[$index];
//   }
//   return $code;
// }
// echo code();

// 分页
$total = 100;
// 不能超过总页数
echo min($total,max(1, $_GET['page']??1));
