<?php
include './1.User.php';
class User {
  public static function make() {
    return 'now';
  }
}
// 通过命名空间访问
echo App\User::make();
echo User::make();