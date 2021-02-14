<?php 
// 定义为抽象类，表明该类中又未实现的抽象方法，需要子类必须实现
abstract class Notify {
  protected $color='red';
  protected $point = 10;

  // 定义抽象方法，其子类必须要实现抽象类的抽象属性和抽象方法
  abstract public function content();

  public function message() {
    return $this->content().'，奖励'.$this->credit().'积分';
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
  public function credit()
  {
    return 5;
  }
  // 实现父类的抽象方法
  public function content() {
    return '欢迎光临';
  }
  // 保存数据
  public function message() {
    // 使用parent可以调用父类方法
    return parent::message();
  }
}
$user = new User;
echo $user->register(); // 发送通知消息