<?php
$name = $_POST["name"];
$password = $_POST["password"];

if(!empty($_POST["checkbox"])){
    setcookie("username", $name, time() + 3600);
    setcookie("password", $password, time() + 3600);
    
    echo "<h3>Hello ".$_COOKIE["username"]."!</h3<br/>";
    echo "<h4>Your cookies are set</h4>";
}
else{
    echo "Cookies not set";
}

echo "<h5>Other Registered Users are: </h5>";
?>