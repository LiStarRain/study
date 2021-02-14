<?php
$water = imagecreatefrompng('./water.png');
$res = imagecreatefromjpeg('./派大星.jpg');

// imagecopy($dst_im,$src_im,$dst_x,$dst_y,$src_x,$src_y,$src_w,$src_h)可以拷贝部分图像
// 坐标系以左上角为原点
// 将 src_im 图像中坐标从 src_x，src_y 开始，宽度为 src_w，高度为 src_h 的一部分拷贝到 dst_im 图像中坐标为 dst_x 和 dst_y 的位置上
// png使用它
imagecopy($res,$water,imagesx($res)-imagesx($water),10,0,0,imagesx($water),imagesy($water));
// imagemerge()可以为原始图片设置透明度 png图片有可能会坏 因此jpg使用它
// imagecopymerge($res,$water,imagesx($res)-imagesx($water),10,0,0,imagesx($water),imagesy($water),25);
header('Content-type:image/jpg');
imagejpeg($res);