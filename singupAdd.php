<?php
// connect to database ,start
define("HOST","localhost");
define("USERNAME","root");
define("PASSWORD","");
define("DBNAME","didimoon");

$db = new mysqli(HOST,USERNAME,PASSWORD,DBNAME);

if($db->connect_error){
    die($db->connect_error);
}

$db->set_charset("utf8");
// connect to database ,end


// save new user ,start
if(isset($_POST["submit"])){
    
    //name
    $name = $_POST["name"];
    $name = trim($name);
    $name = mysqli_real_escape_string($db, $name);
    if((!preg_match("/^[a-zA-Z\s]+$/", $name)) || $name == ""){
        echo "name its not ok";
        // header("Location:");
        die();
    }

    //username
    
    $username = $_POST["username"];
    $username = trim($username);
    $username = mysqli_real_escape_string($db, $username);
    if($username == "" || (!preg_match("/^[a-zA-Z0-9_]{3,16}$/", $username))){
        echo "username its not ok";
        // header("Location:");
        die();
    }

        $sql = "SELECT `username` FROM `user` WHERE `username`='$username'";
        $result = $db->query($sql);
        $result = $result->fetch_all(MYSQLI_ASSOC);
        if(isset($result[0]["username"])){
            echo "username tekrari";
            // header("Location:");
            die();
        }    
    
    //email
    
    $email = $_POST["email"];
    $email = trim($email);
    $email = mysqli_real_escape_string($db, $email);
    if($email == "" || (!filter_var($email, FILTER_VALIDATE_EMAIL))){
        echo "email its not ok";
        // header("Location:");
        die();
    }

    //password

    $password = $_POST["password"];
    $password = trim($password);
    $password = mysqli_real_escape_string($db, $password);
    if (strlen($password) >= 8) {
        if (preg_match("/[A-Z]+/", $password) && preg_match("/[a-z]+/", $password) && preg_match("/[0-9]+/", $password)) {
            echo "password is true";
        } else {
            echo "پسورد باید شامل حروف انگلیسی بزرگ و کوچک، اعداد و نمادها باشد.";
            die();
        
        }
    } else {
        echo "پسورد باید حداقل 8 کاراکتر باشد.";

        die();
    }
    
    //re-Password
    
    $rePassword = $_POST["rePassword"];
    if ($rePassword =! $password) {
        echo "retype password is false";
        die();      
    }
    
    //hash password
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    
    // save to database
    $sql = "INSERT INTO `user` (`username`, `email`, `password`, `name`) VALUES ('$username','$email','$hashedPassword','$name')";
    echo $sql;
    $result = $db->query($sql);

    if($result){
        header("Location:index.php");
        }else{
           echo "fale to save data" ;
        }
    }  
          

// save new user ,end
?>