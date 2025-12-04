<?php
 $currentUrl=parse_url($_SERVER["REQUEST_URI"])["path"];

 $routes=[
    "/"=>"controller/index.php",
    "/about"=>"controller/about.php",
    "/contact"=>"controller/contact.php",
 ];

 function routerToController($currentUrl,$routes){
     if( array_key_exists($currentUrl,$routes)){
        require $routes[$currentUrl];
     }else{
       abort(); 
     }
 }

 function abort($statusCode = 404){
    http_response_code($statusCode);
    require "views/{$statusCode}.php";
    die();
 }

 routerToController($currentUrl, $routes);
?>