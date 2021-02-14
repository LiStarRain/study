<?php
$width = 300;
$height = 500;
$res = imagecreatetruecolor($width,$height);
$image = imagecreatefromjpeg('./派大星.jpg');
// imagecopyresampled() 函数可以对图片进行缩
$image_width = imagesx($image);
$image_height = imagesy($image);

if ($image_width/$width > $image_height / $height) {
  // 裁图片宽度
  $image_width = $image_height/$height * $width;
} else {
  $image_height = $image_width / $width * $height;
}

imagecopyresampled($res,$image,0,0,0,0,$width,$height,$image_width,$image_height);
header('Content-type:image/png');
imagepng($res);
