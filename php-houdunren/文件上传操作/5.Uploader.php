<?php
class Uploader {
  protected $dir;
  public function make() {
    // 创建文件夹
    $this->makeDir();
    // 格式化数据
    $files =  $this->format();
    // 存储成功上传的文件
    $saveFiles = [];
    // 移动文件
    foreach($files as $file) {
      if ($file['error'] == 0){
        if (is_uploaded_file($file['tmp_name'])) {
          // pathinfo() 可以获取文件路径信息
          // print_r(pathinfo($file['name']));
          $to = $this->dir.'/'.time().mt_rand(1,999).'.'.pathinfo($file['name'])["extension"];
          if (move_uploaded_file($file['tmp_name'],$to)) {
            print_r($to);
            $saveFiles[] = [
              'path'=>$to,
              'size'=>$file['size'],
              'name'=>$file['name']
            ];
          }
        }
      }
    }
    return $saveFiles;
  }

  // 创建上传目录
  private function makeDir() {
    $path = 'files/'.date('Y/m');
    $this->dir = $path;
    return is_dir($path) or mkdir($path,0755,true);
  }

  private function format() :array {
    $files = [];
    foreach($_FILES as $filed) {
      if (is_array($filed['name'])) {
        foreach($filed['name'] as $id=>$file) {
          $files[] = [
            'name'=>$filed['name'][$id],
            'type'=>$filed['type'][$id],
            'error'=>$filed['error'][$id],
            'tmp_name'=>$filed['tmp_name'][$id],
            'size'=>$filed['size'][$id]
          ];
        }
      } else {
        $files[] = $filed;
      }
    }
    return $files;
  }
}
$obj = new Uploader;
print_r($obj->make());
