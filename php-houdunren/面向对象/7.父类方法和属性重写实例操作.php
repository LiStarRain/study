<?php 
class Notify {
  protected $color='red';
  protected $point = 10;
  public function message() {
    return '发送通知消息，奖励'.$this->credit().'积分';
  }
  public function credit() {
    return $this->point;
  }
}

// extends 继承
class User extends Notify {
  public function register() {
    return "<span style='color:{$this->color};'>{$this->message()}</span>";
  }
  // 覆盖重写父类的方法
  public function credit()
  {
    return 5;
  }
}

class Comment extends Notify {
  // 属性覆盖
  protected $point = 20;
  public function send() {
    return $this->message();
  }
}
$user = new User;
echo $user->register(); // 发送通知消息
echo '<hr/>';
echo (new Comment)->send(); // 发送通知消息