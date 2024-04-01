<?php
include_once('functions.php');
require_once('usersModel.php');

if(isset($_REQUEST['submit'])){

   $error_message = '';
   $success_message = '';
   $username = $_REQUEST['username'];
   $full_name = $_REQUEST['full_name'];
   $contact = $_REQUEST['contact'];
   $password = $_REQUEST['password'];
   $c_password = $_REQUEST['c_password'];

   

   if($full_name == ''){
       $error_message .= "Your must fill Full Name! <br>";
   }elseif (name_validation($full_name) === false) {
       $error_message .= "Invalid Name Format! <br>";
   }
   
   if($username == ''){
       $error_message .= "Your must fill User Name! <br>";
   }elseif (username_validation($username) === false) {
       $error_message .= "Invalid User Name Format! <br>";
   }
   if($password == ''){
       $error_message .= "Your must fill Password! <br>";
   }elseif (password_validation($password) === false) {
       $error_message .= "Wrong Password Format! <br>";
   }elseif ($c_password !== $password) {
       $error_message .= "Password Doesn't Match! <br>";
   }



   
   $submited_data = [
    'user_name' => $username,
    'full_name' => $full_name,
    'contact'=> $contact,
    'password' => $password,
    ];

   if($error_message === ''){

    $result = create_employee($submited_data);
    if($result){
        $error_message .= "Employee info successfully inerted! <a href='login.php'>Login Now</a> <br>";
    }
    
   }



   
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
</head>
<body>

    <table border="1" width="100%">
    <tr>
        <td><a href="index.php"><h2>EventHub</h2></a></td>
        <td colspan="2">
            <a href="index.php">Home</a>
              
             | <a href="Sign Up.php">Register</a> 
             | <a href="login.php">Login</a>
        </td>
    </tr>

    <tr>
        <td></td>
        <td colspan="2">
            <br>
            <br>
                <h3>Sign Up</h3>
                <form action="#" method="post">


                <label for="">User Name: </label><input type="text" name="username" id="">
                <hr>
                <label for="">Full Name: </label><input type="text" name="full_name" id="">
                <hr>
                <label for="">Contact: </label><input type="text" name="contact" id="">
                <hr>
                <label for="">Password: </label><input type="password" name="password" id="">
                <hr>
                <label for="">Confirm Password: </label><input type="password" name="c_password" id="">
                <hr>
               
                

                <p><?php if(isset($error_message)){echo $error_message;} ?></p>
                <p><?php if(isset($success_message)){echo $success_message;} ?></p>

                <br>
                <input type="submit" value="Submit" name="submit">
                </form>
            <br>
            <br>

        </td>
    </tr>
    <tr>
        <td colspan="3">Copyright &copy; 2024 Online Shop. All rights are reserved.</td>
    </tr>

    </table>
    
</body>
</html>