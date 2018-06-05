<?php 
	if (isset($_POST['Submitter']))
	{
        //$Id=$_POST['Id'];
        $Name=$_POST['Name'];
        $Email=$_POST['Email'];
        $Number=$_POST['Number'];
        $Graduationyear=$_POST['Graduationyear'];
        $Department=$_POST['Department'];
        $database = "crud";
        $conn= mysqli_connect('localhost', 'root', '',$database);
        
        $tablename = "alumni_records";
        //Create Database query
        $sql="INSERT INTO alumni_records(name, email, numbers, graduationYear,department) VALUES ('$Name','$Email','$Number','$Graduationyear','$Department')";

       if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    }
     else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
               
	}

?>
<!DOCTYPE>
<html>
    <head>
        <title></title>    
    </head>
    <style type="text/css">
input[type="text"],textarea{
	border:1px solid dashed;
	background-color: rgb(221,216,212);
	width: 480px;
	padding: .5em;
	font-size: 1.0em;
}
input[type="Submit"]{
	color: white;
	font-size: 1.0em;
	font-family: Bitter,Georgia,Times,"Times New Roman",serif;
	width: 200px;
        height: 40px;
        background-color:  #5D0580;
        border: 5px solid ;
        border-bottom-left-radius: 35px;
        border-bottom-right-radius: 35px;
        border-top-left-radius: 35px;
        border-top-right-radius: 35px;
        border-color: rgb(221,216,212);
        font-weight: bold;
        float: left;
}
.FieldInfo{
	color: rgb(251, 174, 44);
        font-family: Bitter,Georgia,"Times New Roman",Times,serif;
        font-size: 1em;
	
}
.success{
    color: rgb(158, 27, 214);
    font-family: Bitter,Georgia,"Times New Roman",Times,serif;
    font-size: 1.4em;
    font-weight:bold;
}
.FieldInfoHeading{
     color: rgb(251, 174, 44);
    font-family: Bitter,Georgia,"Times New Roman",Times,serif;
    font-size: 1.3em;
}
#center{
	width: 500px;
	margin:0 auto;
}
fieldset{
	background-image: url("ems1.jpg");
	background-repeat: repeat-x;
}
body{
	background-image: url("2.jpg");
	background-repeat: repeat;
}
	</style>   
 	 <body>
    <?php    
    ?>
    <div id="center">
    <form action="insert_into_db.php" method="post">
<fieldset>
   
    <span class="FieldInfo">NAME:</span><br><input type="text" name="Name" value=""><br>
    <span class="FieldInfo">E-MAIL:</span><input type="text" name="Email" value=""><br>
    <span class="FieldInfo">NUMBER:</span><input type="text" name="Number" value=""><br>
    <span class="FieldInfo">GRADUATION YEAR:</span><input type="text" name="Graduationyear" value=""><br>
    <span class="FieldInfo">DEPARTMENT:</span><input type="text" name="Department" value=""><br>
    <input type="Submit" name="Submitter" value="click to submit">
    
</fieldset>
    </form>   
    </div>
    </body>
</html>