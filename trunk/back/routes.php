<?php
  function call($controller, $action) {
    require_once('controllers/' . $controller . '_controller.php');

    switch($controller) {
      case 'Home' :
        $controller = new HomeController();
        if(isset($_GET['page']))
        {
          $page = $_GET['page'];
        }
        else
        {
          $page = 'Index.php';
        }
        
        break;
    }

    $controller->{ $action }($page);
  }

  // we're adding an entry for the new controller and its actions
  $controllers = array('Home' => ['Index', 'Error']
													);

  if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
      call($controller, $action);
    } else {
      call('Home', 'Error');
    }
  } else {
    call('Home', 'Error');
  }
?>