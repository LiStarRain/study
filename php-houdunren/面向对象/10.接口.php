<?php
// 接口只定义规范并不做任何实现，而抽象类可以既定义规范又做实现
interface InterFaceCache {
  public function set();
  public function get();
}

class Mysql implements InterFaceCache {
  // 必须实现这些接口
  public function set() {

  }
  public function get() {

  }
}

class Redis implements InterFaceCache {
  // 必须实现这些接口
  public function set() {

  }
  public function get() {

  }
}

class Cache {
  public static function instance(string $driver) {
    switch(strtolower($driver)) {
      case 'mysql':
        return new Mysql;
      case 'redis': 
        return new Redis;
    }
  }
}
$cache = Cache::instance('redis');
var_dump($cache);