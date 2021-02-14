<?php
class Water {
  protected $water; // 水印资源
  public function __construct(string $water)
  {
    $this->water = $water;
  }
  public function make(string $image, string $filename=null,int $pos=3) {
    // 检测文件
    $this->checkImage($image);
    $res = $this->resource($image);
    $water = $this->resource($this->water);
    $position = $this->position($res,$water,$pos); // 九宫格
    imagecopy($res,$water,$position['x'],$position['y'],0,0,imagesx($water),imagesy($water));
    // 生成新图像
    return $this->showAction($image)($res, $filename??$image);
  }
  // 水印位置
  protected function position($res,$water,$pos) {
    $info = ['x'=>0,'y'=>0];
    switch($pos) {
      case 1:
        break;
      case 2:
        $info['x'] = (imagesx($res)-imagesx($water)) / 2;
        break;
      case 3:
        $info['x'] = imagesx($res) - imagesx($water);
        break;
      case 4:
        $info['y'] = (imagesy($res) - imagesy($water)) / 2;
        break;
      case 5:
        $info['x'] = (imagesx($res)-imagesx($water)) / 2;
        $info['y'] = (imagesy($res) - imagesy($water)) / 2;
        break;
      case 6:
        $info['x'] = imagesx($res) - imagesx($water);
        $info['y'] = (imagesy($res) - imagesy($water)) / 2;
        break;
      case 7: 
        $info['y'] = imagesy($res) - imagesy($water);
        break;
      case 8:
        $info['x'] = (imagesx($res)-imagesx($water)) / 2;
        $info['y'] = imagesy($res) - imagesy($water);
        break;
      case 9:
        $info['x'] = imagesx($res) - imagesx($water);
        $info['y'] = imagesy($res) - imagesy($water);
        break;
    }
    return $info;
  }
  // 图片文件检测
  protected function checkImage($image) {
    if(!is_file($image) || !getimagesize($image)) {
      throw new Exception('file is not a image');
    }
  }
  // 根据图像类型返回相应的输出函数
  protected function showAction(string $image) {
    $info = getimagesize($image);
    $functions = [1=>'imagegif',2=>'imagejpeg',3=>'imagepng'];
    return $functions[$info[2]];
  }
  // 根据图片生成图片资源
  protected function resource(string $image) {
    $info = getimagesize($image);
    $functions = [1=>'imagecreatefromgif',2=>'imagecreatefromjpeg',3=>'imagecreatefrompng'];
    $call = $functions[$info[2]]; // 根据图片类型选择合适的函数
    return $call($image);
  }
}