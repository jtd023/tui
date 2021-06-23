<?php

  //ini_set('display_errors', 1);
  //ini_set('display_startup_errors', 1);
  //error_reporting(E_ALL);
  
  include('cities.php');
  include('routes.php');
  
  Route::add('/',function(){
    echo "TUI API";
  },'get');
  
  Route::add('/read/([a-z-A-Z]*)/([a-z-A-Z-0-9]*)',function($city, $days){
    $call=new Cities();
    $call->read($city, $days);
  },'get');
  
  Route::run('/');

?>