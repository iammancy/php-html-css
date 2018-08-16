<?php
$name = $_POST["name"];
$password = $_POST["password"]; //alternate ways to extract form data
$gender = $_POST["gender"];
$email = $_POST["email"];
$server = "localhost";
$user_db = "root";
$pass_db = "";
$db = "login_details";

if(!empty($_POST["checkbox"])){
    setcookie("username", $name, time() + 3600);
    setcookie("password", $password, time() + 3600);
    setcookie("email", $email, time() + 3600);
    
    echo "<h3>Hello ".$_COOKIE["username"]."!</h3<br/>";
    echo "<h4>Your cookies are set</h4>";
    echo "<h4>Your email is ". $_COOKIE["email"]."</h4>";
}
else{
    echo "Cookies not set";
}

$con = new mysqli($server, $user_db, $pass_db, $db);

if(!$con) {
    die("Connection Failed");
}
else{
   $query = "INSERT INTO login (NAME, PASSWORD, EMAIL, GENDER) VALUES ('$name', '$password', '$email', '$gender')";
//    $query = "INSERT INTO login (NAME, PASSWORD, EMAIL, GENDER)
//VALUES ('$name', 'Doe', 'john@example.com', 'male')";
    if(mysqli_query($con, $query)){
        echo "Query Added";
    }
    else{
        echo "Error Occurred".mysqli_error($con);
    }
}

echo "<h5>Other Registered Users are: </h5>";
?>