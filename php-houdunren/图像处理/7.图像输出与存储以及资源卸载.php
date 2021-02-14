<?php
header('Content-type:image/png');
$resource = imagecreatetruecolor(500,500); // 创建画布
$red = imagecolorallocate($resource,255,0,0);
imagefill($resource,0,0,$red);
// 保存图像 同名头像会被覆盖
imagepng($resource,'7.png');
// 输出图像
imagepng($resource);
// 清除图像处理所占占用的资源
imagedestroy($resource);