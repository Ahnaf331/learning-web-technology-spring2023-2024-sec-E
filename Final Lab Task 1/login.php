<?php


 include_once('functions.php');
 require_once('usersModel.php');
 require_once('check_login_status.php');




 if(isset($_REQUEST['submit'])){

    $error_message = '';
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    if($username == ''){
        $error_message .= "Your must fill User Name! <br>";

    }
    if($password == ''){
        $error_message .= "Your must fill Password! <br>";
    }
    if($error_message === ''){

        $login = employee_login($username, $password);
        if ($login == true){
            session_start();
            $_SESSION["employee_login"] = $username;

            if (isset($_POST["remember_me"])) {
                $cookie_name = "remember_user";
                $cookie_value = $username;
                $cookie_expire = time() + 3600;
                setcookie($cookie_name, $cookie_value, $cookie_expire, "/");
            }
            header('location: Product.php');

        }else{
                $invalid_login = "Invalid login details! Try Again!";
            } 
    }



    

    
 }


?>




<!DOCTYPE html>
<html lang="en">
<head>

    <title>Login</title>
</head>
<body>

        
            <?php 
            if(isset($_SESSION['success_message'])){
                echo $_SESSION['success_message']."<br><br>";
            }
            ?>
                <h3>Login</h3>
                <form action="#" method="post">
                    <fieldset>
                        <legend>Login</legend>
                        <label for="">User Name: </label><input type="text" name="username" id="">
                        <hr>
                        <label for="">Password: </label><input type="password" name="password" id="">
                        <hr>
                        <input type="checkbox" name="remember_me" id=""><label for="">Remember Me </label>
                        <br>
                        <br>
                        <input type="submit" value="Submit" name="submit">
                        
                        <br>
                        <p><?php if(isset($error_message)){echo $error_message;} ?></p>
                        <p><?php if(isset($invalid_login)){echo $invalid_login;} ?></p>
                    </fieldset>
                </form>
            <br>
            <br>

    
</body>
</html>