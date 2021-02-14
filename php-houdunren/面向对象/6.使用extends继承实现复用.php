<?php 
class Notify {
  protected $color='red';
  public function message() {
    return '发送通知消息';
  }
}

// extends 继承
class User extends Notify {
  public function register() {
    return "<span style='color:{$this->color};'>{$this->message()}</span>";
  }
}

class Comment extends Notify {
  public function send() {
    return $this->message();
  }
}
$user = new User;
echo $user->register(); // 发送通知消息
echo '<hr/>';
echo (new Comment)->send(); // 发送通知消息