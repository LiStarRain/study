<?php
header('Content-type:image/png');
$resource = imagecreatetruecolor(500,500);
$red = imagecolorallocate($resource,255,0,0);
$green = imagecolorallocate($resource,0,255,0);
$blue = imagecolorallocate($resource,0,0,255);
imagefill($resource,0,0,$red);

// imagesetthickness($image,thickness)函数可以调整线条的宽度
imagesetthickness($resource,3);

// imagesetstyle($image,$style)函数可以设置线条的风格
imagesetstyle($resource,[$red,$blue,$green]);
imageline($resource,0,0,500,500,IMG_COLOR_STYLED); // 需要用常量代替颜色
imageline($resource,500,0,0,500,$blue);

imagepng($resource);