<?php
  class Db {
    private static $instance = NULL;

    private function __construct() {}

    private function __clone() {}

    public static function getInstance() {
      if (!isset(self::$instance)) {
        
        self::$instance = $mysqli = new mysqli('localhost','root','','db_attendance');
      }
      return self::$instance;
    }
  }
?>