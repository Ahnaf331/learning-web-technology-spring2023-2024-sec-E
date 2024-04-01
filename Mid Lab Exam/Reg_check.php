<?php

    function firstname_validation($first_name){
    $firstnameValid = true;
    $my_characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789.-_';
    if (strlen($first_name) < 2) {
        $firstnameValid = false;
    } else {
        for ($i = 0; $i < strlen($first_name); $i++) {
            if (strpos($my_characters, $first_name[$i]) === false) {
                $firstnameValid = false;
                
            }
        }
    }
    if (!$firstnameValid) {
        return false;
    }

    }


    function lastname_validation($lastname){
    $lastnameValid = true;
    $lastnameCharacters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ. ';
    if (strlen($lastname) < 2) {
        $lastnameValid = false;
    } else {
        for ($i = 0; $i < strlen($lastname); $i++) {
            if (strpos($lastnameCharacters, $lastname[$i]) === false) {
                $lastnameValid = false;
                
            }
        }
    }
    
    if (!$lastnameValid) {
        return false;
    }

    }

   function password_validation($password){
    $validPassword = true;
    if (strlen($password) < 8) {
        $validPasswordl = false;
    }
    $checkCharacter = false;
    $passworCharacter = ['@', '#', '$', '%'];
    for ($i = 0; $i < strlen($password); $i++) {
        if (in_array($password[$i], $passworCharacter)) {
            $checkCharacter = true;

        }
    }
    if (!$checkCharacter) {
        return false;
    }
   }



    function email_validation($email){
    $emailValid = true;
    $emailsCharacters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789.@';

        for ($i = 0; $i < strlen($email); $i++) {
            if (strpos($emailsCharacters, $email[$i]) === false) {
                $emailValid = false;
                
            }
        }
    if (!$emailValid) {
        return false;
    }

    }




?>



