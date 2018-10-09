<?php

$NameError ="";
$EmailError ="";
$GenderError ="";
$WebsiteError="";

if(isset($_POST["Submit"]))
{
if (empty($_POST["Name"]))
{
    $NameError = "Name is required";
}else{
    $Name = test_for_data($_POST["Name"]);
    if (!preg_match("/[a-zA-Z\.]+$/",$Name))
    {
        $NameError = "only letters please";
    }
}
if (empty($_POST["Email"]))
{
    $EmailError = "Email is required";
}else{
    $Email = test_for_data($_POST["Email"]);
    if (!filter_var($Email,FILTER_VALIDATE_EMAIL))
    {
    $EmailError = "Invalid Email";
    }
}
if (empty($_POST["Gender"]))
{
    $GenderError = "Gender is required";
}else{
    $Gender = test_for_data($_POST["Gender"]);
}
if (empty($_POST["Website"]))
{
    $WebsiteError = "Website is required";
}else{
    $Website = test_for_data($_POST["Website"]);
    if (!preg_match("/^(http|https|ftp):\/\/([A-Z0-9][A-Z0-9_-]*(?:\.[A-Z0-9][A-Z0-9_-]*)+):?(\d+)?\/?/i",$Website))
    {
        $WebsiteError = "Invalid Website";
    }
}
if (!empty ($_POST["Name"]) && !empty ($_POST["Email"]) && !empty ($_POST["Gender"]) && !empty ($_POST["Website"]) && !empty ($_POST["Comment"]))
{
    if((preg_match("/[a-zA-Z]+$/",$Name))==true && (filter_var($Email,FILTER_VALIDATE_EMAIL))==true && (preg_match("/^(http|https|ftp):\/\/([A-Z0-9][A-Z0-9_-]*(?:\.[A-Z0-9][A-Z0-9_-]*)+):?(\d+)?\/?/i",$Website)) ==true)
    {
    echo "<h1> USER INFO</h1>";
    echo "Name : {$_POST["Name"]} <br>";
    echo "Email : {$_POST["Email"]} <br>";
    echo "Gender : {$_POST["Gender"]} <br>";
    echo "Website : {$_POST["Website"]} <br>";
    echo "Comment : {$_POST["Comment"]} <br>";
    // Email aspect
    $Emailto = $_POST["Email"];
    $Subject = "User Data";
    $Body = "Name = {$_POST["Name"]} Email = {$_POST["Email"]} Gender = {$_POST["Gender"]} Website = {$_POST["Website"]} Comment = {$_POST["Comment"]}";   
    $Sender = "From: ainaniran38@gmail.com";
    if (mail($Emailto,$Subject,$Body,$Sender))
        {
            echo "Mail sent!";
        }
        else{
            echo "Mail not sent";
        }
    }
    else
    {
       echo '<span class="Error"><h2>PLEASE FILL CORRECT INFO PLEASE!!!!</h2></span>';
    }
}
}
function test_for_data($data)
{
    return $data;
}
 
?>
<!DOCTYPE>
<html>
    <head>
        <title>Form validation </title>    
        <style type="text/css">

        input[type="text"], input [type="email"], textarea 
        {
            border: 1px;
            border-style: groove;
            background-color: rgb(200,200,200);
            width:60%;
            padding: 0.5em;
            font-size: 1.0em;
            border-color :red;
        } 
       .Error
        {
            color:red;
        }
        body 
        {
            float:left;
        }
        
        </style>
    </head>
    <body>
    <?php ?>
        <h2>Form validation yay!!!!</h2>
    <form action="formvalidation.php" method="post">
    <span class="Error"><legend> * Please Fill out the following fields.</legend></span>
    <fieldset>
        Name: <br>
        <input class="input" type="text" Name="Name" value="">
        <span class="Error">*<?php echo $NameError; ?><br></span>
        E-mail:<br>
        <input class="input" type="text" Name="Email" value="">
        <span class="Error">*<?php echo $EmailError; ?><br></span>
        Gender:<br>
        <input class="radio" type="radio" Name="Gender" value="Male">Male
        <input class="radio" type="radio" Name="Gender" value="Female">Female
        <span class="Error">*<?php echo $GenderError; ?><br></span>
        Website:<br>
        <input class="input" type="text" Name="Website" value="">
        <span class="Error">*<?php echo $WebsiteError; ?><br></span>
        Comment:<br>
        <textarea Name="Comment" rows="5" cols="25"></textarea>
        <br>
        <br>
        <input type="Submit" Name="Submit" value="Click to Submit">
    </fieldset>
    <form>
    </body>
</html>