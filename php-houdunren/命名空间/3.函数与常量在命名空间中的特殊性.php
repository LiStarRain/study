<?php
namespace App;
include './3.helper.php';

function show() {
  echo 'app show';
}

// \Helper\show(); // app show

echo NAME; // define函数定义的常量不受命名空间的限制
echo \Helper\AGE; // const 定义的常量受命名空间的限制
