<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <div class="container">
        <h1> Login Form </h1>
        <div class="wrapper">
            <form action="login.php" method="POST">        
            <table class="inner">
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" placeholder="Enter Name Here" value="<?php echo (isset($_COOKIE["username"]))?$_COOKIE["username"]:' ' ?>" /></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" /></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="checkbox[]" /></td>
                    <td>Remember Me</td>
                </tr>
                <tr>
                    <td>Submit</td>
                    <td><input type="submit" value="submit" name="submit"/></td>
                </tr>
            </table>
            </form>
        </div>
    </div>
</body>
</html>