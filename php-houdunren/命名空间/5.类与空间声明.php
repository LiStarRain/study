<?php
namespace App;

// 通过操作符 use 来为类或命名空间使用别名
// use App\Module\Controller\User; // 默认使用这里面的User类
use App\Module\Controller; // 使用命名空间

include './5.php';

// echo User::make();
echo Controller\User::make();