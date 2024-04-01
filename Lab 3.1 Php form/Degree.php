<?php
    if(isset($_REQUEST['submit'])){
        $degrees = $_REQUEST['degrees'];
        
        echo "Selected Degree:<br>";
        foreach($degrees as $degree){
            echo $degree."<br>";
        }
    }
?>

<html>
<head>
    <title>Degree</title>
</head>
<body>
    <form action="Degree.php" method="post">
        <fieldset>
            <legend>Degree</legend>
            <input type="checkbox" name="degrees[]" value="SSC" id=""><label>SSC</label>
            <input type="checkbox" name="degrees[]" value="HSC" id=""><label>HSC</label>
            <input type="checkbox" name="degrees[]" value="BSc" id=""><label>BSc</label>
            <input type="checkbox" name="degrees[]" value="MSc" id=""><label>MSc</label>
            <hr>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
</body>
</html>
