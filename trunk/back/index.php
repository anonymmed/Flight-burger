<?php
require_once('connection.php');

  if (isset($_GET['controller']) && isset($_GET['action'])) {
    $controller = $_GET['controller'];
    $action     = $_GET['action'];
  } else {
    $controller = 'Home';
    $action     = 'Index';
  }

  require_once('views/layout.php');
?>