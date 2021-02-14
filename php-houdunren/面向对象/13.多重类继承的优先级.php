<?php
// trait 定义的类可以使用use来实现多继承
trait Log {
  public function save() {
    return  __METHOD__;
  }
}

trait Common {
  public function total() {
    return __METHOD__;
  }
}

class Site {
  public function save() {
    return __METHOD__;
  }
}

class Topic extends Site {
  use Log,Common;

  // public function save() {
  //   return __METHOD__;
  // }
}
$topic = new Topic;
echo $topic->save();