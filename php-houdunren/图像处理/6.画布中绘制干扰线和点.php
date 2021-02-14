<?php
header('Content-type:image/png');
$resource = imagecreatetruecolor(500,500);
$red = imagecolorallocate($resource,255,0,0);
$green = imagecolorallocate($resource,0,255,0);
$blue = imagecolorallocate($resource,0,0,255);
$white = imagecolorallocate($resource,255,255,255);
imagefill($resource,0,0,$white);
// imagesetpixel($image,$x,$y,$color) 可以绘制像素点
imagesetpixel($resource,250,250,$red);
// 多绘制几个干扰点
$colors = [$red,$blue,$green];
for ($i = 0; $i < 5000; $i++) {
  imagesetpixel($resource,mt_rand(0,500),mt_rand(0,500),$colors[mt_rand(0,count($colors)-1)]);
}
// 绘制干扰线
for ($i = 0; $i < 25; $i++) {
  imageline($resource,mt_rand(0,500),mt_rand(0,500),
  mt_rand(0,500),mt_rand(0,500),
  $colors[mt_rand(0,count($colors)-1)]);
}
imagepng($resource);