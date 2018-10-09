<?php
if(isset ($_POST["Submit"])){
    
$Username = $_POST["Username"];
$Password = $_POST["Password"];

if ($Username == "Ainaniran" && $Password == "password")
{
    echo "<h2>Welcome : {$_POST["Username"]} </h2>";
}
else{
    echo "<h1> INVALID PASWORD TRY AGAIN!!!</h1>";
}
}
else {
    echo "<h1> LOGIN REQUIRED</h1>";
}

?>

<!DOCTYPE>
<html>
    <head>
        <title>POST form</title>    
    </head>
    <body>

    <fieldset>
    <legend>Alumni page</legend>
    <form action="form.php" method="POST">
    <label for="Username">Username:</label>
    <input id="Username" type="text" name="Username"><br><br>
    <label for="Password">Password:</label>
    &nbsp;
    <input id="Password" type="Password" name="Password"><br><br>
    <input id="Submit" type="Submit" name="Submit">
    </form>
    </fieldset>

    </body>
</html>