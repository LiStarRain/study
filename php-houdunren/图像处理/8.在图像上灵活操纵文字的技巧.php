<?php
header('Content-type:image/png');
$resource = imagecreatetruecolor(500,500);
$red = imagecolorallocate($resource,255,0,0); 
$white = imagecolorallocate($resource,255,255,255); 
imagefill($resource,0,0,$white);

// imagefttext ($image,$size, $angle, $x, $y, $color, $fontfile, $text, $extrainfo)
// 该函数可以向图片中输入文本
$font = realpath('../source.otf');
$text = 'ame';
// imagettftext($resource, 50, 0, 0, 50, $red, $font, $text);
for ($i=0;$i<strlen($text);$i++) {
  imagettftext($resource,20,mt_rand(-30,30),50+25*$i,250,$red,$font,$text[$i]);
}
imagepng($resource);
imagedestroy($resource);