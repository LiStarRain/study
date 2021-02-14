<?php
namespace App;

use App\Module\Controller\User, App\Server\Pay;
// use App\Server\Pay; // 推荐

include './5.php';
include './6.php';

echo User::make();
echo '<hr/>';
echo Pay::make();