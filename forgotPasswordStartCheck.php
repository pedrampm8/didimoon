<?php
// connect to database ,start
define("HOST","localhost");
define("USERNAME","root");
define("PASSWORD","");
define("DBNAME","didimoon");

$db = new mysqli(HOST,USERNAME,PASSWORD,DBNAME);

if($db->connect_error){
    echo "die";
    die($db->connect_error);
}
// connect to database ,end

// check username,start
if(isset($_POST["submit"])){
    $username = $_POST["username"];
        
    $sql = "SELECT `email` FROM `user` WHERE `username`='$username'";
    $result = $db->query($sql);
    $result = $result->fetch_all(MYSQLI_ASSOC);
    if(isset($result[0]["email"])){
        $email= $result[0]["email"] ;
        header("Location:forgotPassword.php");
    }else{
        echo "email not find";      
    }    
}
// check username ,end