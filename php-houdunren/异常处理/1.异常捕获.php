<?php
try {
  throw new Exception('test');
} catch (Exception $e) {
  echo $e->getMessage(); // test
}