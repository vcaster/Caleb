<!DOCTYPE>

<html>
	<head>
		<title>Viw From DataBase</title>
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
.success,caption{
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
div{
	width: 500px;
	margin-left: 360px;
}
	</style>
        
        
	<body>
            
            <h2 class="success"> <?php echo @$_GET['deleted']; ?></h2>
            
	<table width="1000" border="5" align="center">
		<caption>View From DataBase</caption>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Number</th>
                        <th>Graduation year</th>
			<th>Department</th>
			<th>Delete</th>
			<th>Update</th>
		</tr>

<?php
        
    $database = "crud";
    $conn= mysqli_connect('localhost', 'root', '',$database);
        
    $tablename = "alumni_records";
        //Create Database query
        $sql="SELECT * FROM alumni_records";

       //$conn->query($sql);
        //echo "VIEW record successfully";
        $Execute = mysqli_query($conn,$sql);
        
    
        
        while($DataRows = mysqli_fetch_array($Execute,MYSQLI_ASSOC)){ 
            
	$Id=$DataRows['id'];
	$Name=$DataRows['name'];
	$Email=$DataRows['email'];
	$Numbers=$DataRows['numbers'];
	$Graduationyear=$DataRows['graduationYear'];
	$Department=$DataRows['department'];
     
        
        
    
?> 
<tr>
<td><?php echo $Id; ?></td>
<td><?php echo $Name; ?></td> 
<td><?php echo $Email; ?></td>
<td><?php echo $Numbers; ?></td>
<td><?php echo $Graduationyear ?></td>
<td><?php echo $Department; ?></td>
<td><a href="delete.php?delete=<?php echo $Id; ?>"> Delete</a></td>
<td>Update</td>
</tr>

            <?php 
            
            }
            
            ?>
</table>
	
	    
	</body>
</html>
