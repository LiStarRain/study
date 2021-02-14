<?php
class Captcha {
  protected $width;
  protected $height;
  protected $resource;
  protected $len; // 验证码位数
  protected $size; // 字体大小
  protected $code; // 最终得验证码
  public function __construct(int $width=150, int $height=50, int $len=5, int $size=20)
  {
    $this->width = $width;
    $this->height = $height;
    $this->len = $len;
    $this->size = $size;
    $this->code = '';
  }
  public function render() {
    $resource = imagecreatetruecolor($this->width, $this->height);
    imagefill($this->resource=$resource,0,0,imagecolorallocate($resource,100,100,100));
    // 先输入文本
    $this->text();
    // 画干扰线
    $this->line();
    // 画干扰点 点在线后画，点会压线
    $this->point();
    // 将资源输送给浏览器
    $this->show();
    return $this->code;
  }
  // 绘制验证码
  protected function text() {
    $font = realpath('../source.otf');
    $text = 'abcdefghijklmnopqrstuvwxyz1234567890';
    for ($i=0;$i<$this->len;$i++) {
      $x = $this->width / $this->len;
      // 随机大小写
      $char = mt_rand(0,1) ? $text[mt_rand(0,strlen($text)-1)] : strtoupper($text[mt_rand(0,strlen($text)-1)]);
      // 验证码
      $this->code .= $char;
      // 角度
      $angle = mt_rand(-20,20);
      // 看一下每个字的高度
      $box = imagettfbbox($this->size,$angle,$font,$char);
      $y = $this->height / 2 - ($box[7] - $box[1]) / 2;
      imagettftext(
        $this->resource,$this->size,$angle,
        $x*$i+10,$y,$this->textColor(),$font,$char
      );
    }
  }
  // 画干扰点
  protected function point() {
    for ($i=0; $i<300; $i++) {
      imagesetpixel(
        $this->resource,
        mt_rand(0,$this->width),mt_rand(0,$this->height),
        $this->color()
      );
    }
  }
  // 画干扰线
  protected function line() {
    for($i=0; $i<6; $i++) {
      imagesetthickness($this->resource,mt_rand(1,2));
      imageline(
        $this->resource,
        mt_rand(0,$this->width),mt_rand(0,$this->height),
        mt_rand(0,$this->width),mt_rand(0,$this->height),
        $this->color()
      );
    }
  }
  // 生成随机的颜色
  protected function color() {
    return imagecolorallocate($this->resource,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
  }
  // 随机生成文字的颜色
  protected function textColor() {
    return imagecolorallocate($this->resource,mt_rand(0,100),mt_rand(0,100),mt_rand(0,100));
  }
  // 显示渲染
  protected function show() {
    header('Content-type:image/png');
    imagepng($this->resource);
  }
}