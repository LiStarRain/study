<?php
namespace App;
include './4.helper.php';

// namespace\Helper\show(); // namespace指当前的命名空间

$action = __NAMESPACE__.'\Helper\show'; // __NAMESPACE__也指向当前命名空间
$action();