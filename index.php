<?php
 require "helper/helper.php";

 $currentUrl=parse_url($_SERVER["REQUEST_URI"])["path"];

 $routes=[
    "/"=>"controller/index.php",
    "/about"=>"controller/about.php",
    "/contact"=>"controller/contact.php",
 ];

 if( array_key_exists($currentUrl,$routes)){
    require $routes[$currentUrl];
 }else{
    http_response_code(404);
    require "views/404.php";
    die();
 }
?>