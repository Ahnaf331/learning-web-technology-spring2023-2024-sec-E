<?php 
    $name = $_REQUEST['name'];
    
    if($name ==""){
        echo "null value. input a valid name";
    }
    else{
        echo "your name is: ".$name;
    }
?>


<html>
    <head>
        <title>Name</title>
    </head>
    <body>  
        <form action="Name.php" method="post" enctype="">
            <fieldset >
                <legend>Name</legend>
                <input type="text" name="name" value="" required/><br>
                <input type="submit" name="submit" value="Submit"/>
            </fieldset>
        </form>
</body>

</html>