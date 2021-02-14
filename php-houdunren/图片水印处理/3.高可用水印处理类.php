<?php
include './Water.php';
try {
  $water = new Water('water.png');
  $water->make('./派大星.jpg','水印.jpg',9);
} catch (Exception $e) {
  echo $e->getMessage();
}