<?php
require "helper/helper.php";
require "Database.php";
//  require "router.php";

$config= require "config.php";

// connect to the database
$db=new Database($config['database']);

$id=$_GET["id"];
$query="select * from posts where id= :id";
$post = $db->query($query, ['id'=>$id])->fetchAll();
dd($post);

