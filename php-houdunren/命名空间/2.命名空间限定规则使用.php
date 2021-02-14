<?php
namespace App;

include './2.php';
include './2.test.php';
class User {
  public static function make() {
    echo __METHOD__;
  }
}

// User::make();
// 注意当前在App下
// Controller\Order::make();
// 去根下找
\Commen\Commen::make();