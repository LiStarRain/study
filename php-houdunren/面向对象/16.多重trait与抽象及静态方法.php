<?php
trait Site{
  public function getSiteName() {
    return 'wasser.net.cn';
  }
  static public function test() {
    return 'test...';
  }
}

// trait 定义的类也可以继承其他类
trait Log {
  public function save() {
    return  __METHOD__;
  }
}

// trait定义的类当中也可以使用抽象方法
trait Common {
  use Site;
  abstract public function name();
  public function total() {
    return __METHOD__;
  }
}

class Topic {
  use Log,Common;
  public function name() {
    return 'name';
  }
}
$topic = new Topic;
echo $topic->getSiteName(); // wasser.net.cn
echo Topic::test(); // test...