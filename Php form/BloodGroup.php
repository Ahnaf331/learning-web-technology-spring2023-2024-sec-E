<?php
    if(isset($_REQUEST['submit'])){
        $blood_group = $_REQUEST['blood_group'];

        echo "Selected Blood Group: ".$blood_group;
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>BLood_Group</title>
</head>
<body>
    <form action="BloodGroup.php" method="post">
        <fieldset>
            <legend>Blood Group</legend>
            <select name="blood_group" value="">
                <option value="A+">A+</option>
                <option value="O+">O+</option>
                <option value="AB+">AB+</option>
                <option value="B+">B+</option>
                <option value="A-">A-</option>
                <option value="O-">O-</option>
                <option value="AB-">AB-</option>
                <option value="B-">B-</option>
            </select>
            <hr>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
</body>
</html>