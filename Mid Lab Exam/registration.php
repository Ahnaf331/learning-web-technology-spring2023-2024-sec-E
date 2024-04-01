<?php

require_once('reg_check.php');

if(isset($_REQUEST['submit'])){

   $error_message = '';
   $success_message = '';
   $first_name = $_REQUEST['first_name'];
   $email = $_REQUEST['email'];
   $lastname = $_REQUEST['lastname'];
   $password = $_REQUEST['password'];
   $c_password = $_REQUEST['c_password'];

   if(isset($_REQUEST['gender'])){
       $gender = $_REQUEST['gender'];
   }else{
       $gender = '';
   }

   $date_of_birth = $_REQUEST['date_of_birth'];

   if($first_name == ''){
       $error_message .= "Your must fill First Name! <br>";
   }elseif (firstname_validation($first_name) === false) {
       $error_message .= "Invalid Name Format! <br>";
   }
   if($lastname == ''){
    $error_message .= "Your must fill last Name! <br>";
}elseif (lastname_validation($lastname) === false) {
    $error_message .= "Invalid last Name Format! <br>";
}
   if($email == ''){
       $error_message .= "Your must fill Email! <br>";
   }elseif (email_validation($email) === false) {
       $error_message .= "Invalid Email Format! <br>";
   }
  
   if($password == ''){
       $error_message .= "Your must fill Password! <br>";
   }elseif (password_validation($password) === false) {
       $error_message .= "Wrong Password Format! <br>";
   }elseif ($c_password !== $password) {
       $error_message .= "Password Doesn't Match! <br>";
   }
   if($gender == ''){
       $error_message .= "Your must fill Gender! <br>";
   }
   if ($date_of_birth == '') {
       $error_message .= "You must fill Date of Birth! <br>";
   }
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Registration</title>
</head>
<body>
<h3>Registration</h3>
                <form action="" method="post">


                <label for="">First Name: </label><input type="text" name="first_name" id="">
                <hr>
                <label for="">Last Name: </label><input type="text" name="lastname" id="">
                <hr>
                <label for="">Email: </label><input type="text" name="email" id="">
                <hr>
                <label for="">Phone: </label><input type="text" name="phone" id="">
                <hr>
                <label for="">Password: </label><input type="password" name="password" id="">
                <hr>
                <label for="">Confirm Password: </label><input type="password" name="c_password" id="">
                <hr>
                <fieldset>
                <legend>Gender</legend>
                <input type="radio" name="gender" value="male" id=""><label for=""> Male</label>
                <input type="radio" name="gender" value="female" id=""><label for=""> Female</label>
                <input type="radio" name="gender" value="other" id=""><label for=""> Other</label>
                </fieldset>
                <br>
                <fieldset>
                <legend>Date of Birth</legend>
                <input type="date" name="date_of_birth" id="">
                </fieldset>
                    <input type="submit" name="submit" value="Submit" >

</body>
</html>
