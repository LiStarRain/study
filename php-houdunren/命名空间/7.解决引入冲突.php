<?php
namespace App;

include './5.php';
include './6.php';

// 起别名
use App\Module\Controller\User;
use App\Server\User as UserServer;

echo User::make();
echo '<hr/>';
echo UserServer::make();
