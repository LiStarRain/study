<?php
// trait 定义的类可以使用use来实现多继承
trait Log {
  public function save() {
    return  __METHOD__;
  }
}

trait Comment {
  public function save() {
    return __METHOD__;
  }
}

class Topic {
  // 两个trait中有重复方法，回报错
  use Log, Comment {
    // Log里面的save方法替换Comment里面的方法
    Log::save insteadOf Comment;
    // 修改该类中所继承的Comment里面save方法的名字
    Comment::save as send;
  }
}
$topic = new Topic;
// echo $topic->save();
echo $topic->send();