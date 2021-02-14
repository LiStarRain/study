<?php
include './26.test1.php';
include './26.test2.php'; // 重复定义了方法而报错
Model\show(); // show1
User\show(); // show2