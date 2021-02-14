<?php
class Thumb {
  public function make(string $image, string $to, int $width, $height, int $type = 3) {
    // 文件检测
    $this->checkImage($image);
    // 图片资源
    $image_res = $this->resource($image);
    // 计算图片与画布宽高
    $info = $this->getSize($width,$height,imagesx($image_res),imagesy($image_res),$type);
    // 画布资源
    $res = imagecreatetruecolor($info['width'],$info['height']);
    // 裁切图片
    imagecopyresampled($res,$image_res,0,0,0,0,$info['width'],$info['height'],$info['img_width'],$info['img_height']);
    // 获得图片显示函数
    $call = $this->showAction($image);
    // header('Content-type:image/jpg');
    return $call($res, $to);
  }

  // 图片检测
  protected function checkImage(string $image) {
    if (!is_file($image) || !getimagesize($image)) {
      throw new Exception('image not found');
    }
  }

  // 返回资源
  protected function resource(string $image) {
    $info = getimagesize($image);
    $functions = [1=>'imagecreatefromgif',2=>'imagecreatefromjpeg',3=>'imagecreatefrompng'];
    $call = $functions[$info[2]];
    return $call($image);
  }

  // 计算图片宽高
  protected function getSize(int $width,int $height,int $image_width,int $image_height,int $type) {
    switch($type) {
      // 保存宽度，高度自动
      case 1:
        $height = $width / $image_width * $image_height;
        break;
      // 保存高度，宽度自适应
      case 2:
        $width = $height / $image_height * $image_width;
        break;
      // 裁切图片来自适应尺寸
      case 3:
      default:
        if ($image_height / $height > $image_width / $width) {
          // 裁切图片高度
          $image_height = $image_width / $width * $height;
        } else {
          // 裁切图片宽度
          $image_width = $image_height / $height * $width;
        }
    }
    return ['width'=>$width,'height'=>$height,'img_width'=>$image_width,'img_height'=>$image_height];
  }

  // 显示图片
  protected function showAction(string $image) {
    $info = getimagesize($image);
    $functions = [1=>'imagegif',2=>'imagejpeg',3=>'imagepng'];
    return $functions[$info[2]];
  }
}