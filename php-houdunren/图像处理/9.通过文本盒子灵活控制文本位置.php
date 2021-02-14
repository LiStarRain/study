<?php
header('Content-type:image/png');
$resource = imagecreatetruecolor(500,500);
$red = imagecolorallocate($resource,255,0,0); 
$white = imagecolorallocate($resource,255,255,255); 
imagefill($resource,0,0,$white);

// imagefttext ($image,$size, $angle, $x, $y, $color, $fontfile, $text, $extrainfo)
// 该函数可以向图片中输入文本
$font = realpath('../source.otf');
$text = 'ame and rain';
// imagettfbbox($size,$angle,$fontfile,$text)可以获取相应的文本盒子
$box = imagettfbbox(20,0,$font,$text);
$width = $box[2] - $box[0];
$height = $box[1] - $box[7];
imagettftext($resource,20,0,250-$width/2,250-$height/2,$red,$font,$text);
// echo $width;
imagepng($resource);
imagedestroy($resource);