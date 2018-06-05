<!DOCTYPE>

<html>
	<head>
<title>Connection</title>
	</head>
	<body>
<?php
$Connection=mysqli_connect('localhost','root','');
if($Connection){
	echo "DataBase Connected <br>";
}
else{
	error.mysqli_connect();
}
$Selected=mysqli_select_db('alumirecord',$Connection);
if($Selected){
	echo "DataBase Selected";
}
else{
	error.mysqli_select_db();
}
?>

	    
	</body>
</html>
