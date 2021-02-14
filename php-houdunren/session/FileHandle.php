<?php
class FileHandle implements SessionHandlerInterface {
  // session文件存储目录
  protected $path;
  // session文件过期时间
  protected $maxlifetime;
  // 构造函数
  public function __construct($path='session',$maxlifetime=1440) {
    $this->path = $this->makeDir($path);
    echo $this->path;
    $this->maxlifetime = $maxlifetime;
  }
  public function close() {
    return true;
  }
  public function destroy($session_id)
  {
    if (is_file($this->path.'/'.$session_id)) {
      @unlink($this->path.'/'.$session_id);
    }
    return true;
  }
  public function gc($maxlifetime)
  {
    foreach(glob($this->path.'/*') as $file) {
      if (filemtime($file) + $this->maxlifetime < time()) {
        @unlink($file);
      }
    }
    return true;
  }
  protected function makeDir($path) {
    // 创建目录
    is_dir($path) or mkdir($path,0775,true);
    // 返回绝对路径
    return realpath($path);
  }
  public function open($save_path, $name)
  { 
    return true;
  }
  public function read($session_id)
  {
    return (string)@file_get_contents($this->path.'/'.$session_id);
  }
  public function write($session_id, $session_data)
  {
    return (bool)@file_put_contents($this->path.'/'.$session_id,$session_data);
  }
}