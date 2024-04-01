<?php
require_once('db.php');

function employee_login($username, $password){
    $conneciton = get_connection();
    $sql = "SELECT * FROM emp WHERE user_name = '{$username}' AND password = '{$password}'";
    $result = mysqli_query($conneciton, $sql);
    $count = mysqli_num_rows($result);

    if($count == 1){
        return true;
    }else{
        return false;
    }
}



function create_employee($emp_data){
    $conneciton = get_connection();
    $sql = "INSERT INTO emp (user_name, full_name, password)
    VALUES ('{$emp_data['user_name']}', '{$emp_data['full_name']}', '{$emp_data['password']}')";
    $result = mysqli_query($conneciton, $sql);
    return $result;
}
function update_employee($emp_data){
    $conneciton = get_connection();
    $sql = "";
}
function delete_employee($username){
    $conneciton = get_connection();
    $sql = "DELETE FROM emp WHERE user_name='{$username}' ";
    $result = mysqli_query($conneciton, $sql);
}




 function Product($p_data){
    $conneciton = get_connection();
    $sql = "INSERT INTO product (p_name, quality, price )
    VALUES ('{$p_data['p_name']}',  '{$p_data['quality']}', '{$p_data['price']}')";
    $result = mysqli_query($conneciton, $sql);
    return $result;
 }


?>
