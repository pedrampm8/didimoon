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



// check to login ,start
if(isset($_POST["submit"])){
    $username = $_POST["username"];
    $username = trim($username);
    $username = mysqli_real_escape_string($db, $username);
    
    $password = $_POST["password"];
    $password = trim($password);
    $password = mysqli_real_escape_string($db, $password);
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    
    $sql = "SELECT `password` FROM `user` WHERE `username`='$username'";
    $result = $db->query($sql);
    $result = $result->fetch_all(MYSQLI_ASSOC);
    if(isset($result[0]["password"])){
        $truePassword= $result[0]["password"] ;
        if(password_verify($password, $truePassword)){
        // header("Location:index.php");
            echo " login ";
        }else{
           echo "fale to login , user or password is not true " ;
        }
    }else{
        echo "user or password is not true";      
    }    
}
// check to login ,end