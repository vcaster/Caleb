<!DOCTYPE>

<html>
    <head>
        <title>PHP FILE</title>
        </head>
        <body>
        <?php print_r($_POST); ?>
<?php

    
$Username = $_POST["Username"];
$Password = $_POST["Password"];
$Submit = $_POST["Submit"];

if(isset ($_POST["Submit"])){
    echo "<br>Welcome : {$Username} <br>";
}

if (isset($_POST["Username"]))
{
    $Username = $_POST["Username"];
    echo $Username . "<br>";
}
else{
    $Username= " ";
}

if (isset($_POST["Password"]))
{
    $Password = $_POST["Password"];
    echo $Password;
}
else{
    $Password= " ";
}

?>

</body>

</html>