<?php
$uri = isset($_SERVER["PATH_INFO"]) ? $_SERVER["PATH_INFO"] : "/";

if($uri == "/"){
    require_once "Controller/loginController.php";
    $Controller = new loginController();
    $Controller->login();
}else {
    echo "404 not found ".$uri;
}