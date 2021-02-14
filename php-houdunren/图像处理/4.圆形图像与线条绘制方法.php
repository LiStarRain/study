<?php
header('Content-type:image/png');
$resource = imagecreatetruecolor(500,500);
$red = imagecolorallocate($resource,255,0,0);
$green = imagecolorallocate($resource,0,255,0);
$blue = imagecolorallocate($resource,0,0,255);
imagefill($resource,0,0,$red);

// imageellipse(img_res,x,y,w,h,color) 可以绘制原型
imageellipse($resource,250,250,200,200,$green);

// imagefilledellipse(img_res,x,y,w,h,color)可以绘制实心圆
imagefilledellipse($resource,250,250,200,100,$green);

// imageline(img_res,x1,x2,y1,y2)可以绘制线条
imageline($resource,150,250,350,250,$red);
imageline($resource,250,150,250,350,$red);

imagepng($resource);