<?php

$url_array = parse_url($_SERVER["REQUEST_URI"]);
$url = $url_array["path"];



$routes=[
    "/"=>"controllers/index.php",
    "/kolektivi"=>"controllers/kolektivi.php",
    "/add"=>"controllers/add.php",
    "/delete"=>"controllers/delete.php",
    "/edit"=>"controllers/edit.php"
    
  ];
  

  if (array_key_exists($url,$routes)){
    require $routes[$url];
  }

?>