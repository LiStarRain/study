<?php
header('Content-type:image/png');
$resource = imagecreatetruecolor(500,500); // 创建画布

// imagecolorallocate() 函数可以为当前画布设置颜色
$red = imagecolorallocate($resource,255,0,0);
$green = imagecolorallocate($resource,0,255,0);
$blue = imagecolorallocate($resource,0,0,255);

// imagefill($resouce,x,y,color)可以为画布填充颜色，不填充画布默认是黑色
imagefill($resource,0,0,$red);

// imagerectangle(resource,x1,y1,x2,y2,color)函数可以绘制空心矩形
imagerectangle($resource,100,100,200,200,$blue);

// imagefilledrectangle($resource,100,100,200,200,$blue)可以绘制实心矩形
imagefilledrectangle($resource,300,300,400,50,$green);

// imagepng($resource,$filename) 将GD图像流（image）以 PNG 格式输出到标准输出（通常为浏览器），或者如果用 filename 给出了文件名则将其输出到该文件
// imagepng($handle,'test.png');
imagepng($resource); // png 是无损的