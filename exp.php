<!DOCTYPE>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>utitled </title>
    
<body>
    this is fliping htmll
    <br> 
    <?php echo "this is fliping php"; ?>
    <br>  
    <h2>  
    <?php echo "and this is how you add 5+56+32 = "; echo 5+56+32;
    $sum = 0;

    $add= 1+$sum;    
    echo "<br>";
    echo $add;
    echo "<hr>";
    $words = "words variable blah blah";
    // string functions to learn or for recall
    ?>

    <?php
    echo "1.".ucfirst($words )."<br>";
    echo "2.".ucwords($words)."<br>";
    echo "3.".strtoupper($words )."<br>";
    echo "4.".strtolower($words)."<br>";
    echo "5.".str_repeat($words,5)."<br>";
    echo "6.".substr($words,6,15)."<br>";
    echo "7.".strpos($words,"blah")."<br>";
    echo "8.".strchr($words, "s")."<br>";
    echo "9.".strlen($words)."<br>";
    echo "10 .".str_replace("blah" , "flip", $words)."<br>";

    ?>

    <?php
    $var1 = 100;
   /* for($x = 0; $x < $var1; $x++)
    {
        echo $x ."<br>";
    }*/
    ?>
    </h2>
<fieldset>
    <legend>Alumni page</legend>
    <form action="" method="POST">
    <label for="Username">Username:</label>
    <input id="Username" type="text" name="Username"><br><br>
    <label for="Password">Password:</label>
    &nbsp;<input id="Password" type="Password" name="Password"><br><br>
    <input id="Submit" type="Submit" name="Submit">
    </form>
</fieldset>

</body>
</html>