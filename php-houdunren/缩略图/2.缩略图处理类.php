<?php
include './Thumb.php';
try {
  $thumb = new Thumb;
  $thumb->make('./派大星.jpg','2.test.jpg',100,100,2);
} catch (Exception $e) {
  echo $e->getMessage();
}