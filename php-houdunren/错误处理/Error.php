<?php
namespace Core;

class Error {
  protected $debug;
  public function __construct($debug = true) {
    $this->debug = $debug;
  }

  public function error() {
    error_reporting(0);
    // 设置自定义错误处理函数
    set_error_handler([$this, 'handle'],E_ALL | E_STRICT);
  }

  public function handle($code, $error, $file, $line) {
    $msg = $error."({$code})".$file."{$line}";
    switch($code) {
      case E_NOTICE: 
        if ($this->debug) {
          echo $msg;
          break;
        }
      default:
        if ($this->debug) {
          echo $msg;
          break;
        } else {
          # 使用日志保存
          $file = 'logs/'.date('Y-m-d').'log';
          // 记录到日志文件
          error_log(date('[c]').$msg.PHP_EOL,3,$file);
        }
        die;
    }
  }
}