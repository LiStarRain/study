<?php
class Code {
  protected $width;
  // __是魔术方法
  public function __construct(int $width)
  {
    // new 的时候自动执行
    $this->width = $width;
  }

  public function make() {
    return $this->width;
  }

  // 析构函数
  public function __destruct()
  {
    // 当对象销毁的时候自动执行
    echo 'destruct';
  }
}

$test = new Code(100);
echo $test->make().'<hr/>';