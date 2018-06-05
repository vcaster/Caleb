<?php

function redirect($location){

                header("Location: $location");
            }
$update_record = $_GET['update'];            
$database = "crud";
$conn= mysqli_connect('localhost', 'root', '',$database);


$show_query = "SELECT * FROM alumni_records WHERE id = '$update_record'";

$Update = mysqli_query($conn,$show_query);

	

while($DataRows = mysqli_fetch_array($Update,MYSQLI_ASSOC)){ 
            
	$update_id=$DataRows['id'];
	$Name=$DataRows['name'];
	$Email=$DataRows['email'];
	$Numbers=$DataRows['numbers'];
	$Graduationyear=$DataRows['graduationYear'];
	$Department=$DataRows['department'];
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
        <form action="update.php?update_id=<?php echo $update_id; ?>" method="post">
<fieldset>
   
    <span class="FieldInfo">NAME:</span><br><input type="text" name="Name" value="<?php echo $Name; ?>"><br>
    <span class="FieldInfo">E-MAIL:</span><input type="text" name="Email" value="<?php echo $Email; ?>"><br>
    <span class="FieldInfo">NUMBER:</span><input type="text" name="Number" value="<?php echo $Numbers; ?>"><br>
    <span class="FieldInfo">GRADUATION YEAR:</span><input type="text" name="Graduationyear" value="<?php echo $Graduationyear; ?>"><br>
    <span class="FieldInfo">DEPARTMENT:</span><input type="text" name="Department" value="<?php echo $Department; ?>"><br>
    <input type="Submit" name="Submit" value="Update">
    
</fieldset>
    </form>   
    </div>
    </body>
</html>

<?php

    $database = "crud";
    $conn= mysqli_connect('localhost', 'root', '',$database);
    
    if(isset($_POST['Submit'])){
        $update_id = $_GET['update_id'];
        $Name = $_POST['Name'];
        $Email = $_POST['Email'];
        $Number = $_POST['Number'];
        $Graduationyear = $_POST['Graduationyear'];
        $Department = $_POST['Department'];
        
        $update_query = "UPDATE alumni_records SET name= '$Name', email = '$Email', numbers='$Number', graduationYear='$Graduationyear', department= '$Department' WHERE id = '$update_id'";
        
        $Execute = mysqli_query($conn,$update_query);
        
  
        
        if($Execute){
            
            redirect("update_into_db.php?Updated=success");
        }
        
    }
    
//    $update_idU = $_GET['update'];
//
//    $update_queryU = "SELECT * FROM alumni_records WHERE id = '$update_idU'";
//
//    $ExecuteU = mysqli_query($conn,$update_queryU);

?>