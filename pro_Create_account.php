<?php include 'database.php'; ?>
<?php
 // create a variable
$Name=$_GET['Name'];
$Email=$_GET['Email'];
$Password=$_GET['Password'];
$Phone_number=$_GET['Phone_number'];
//Execute the query
mysqli_query($connect,"INSERT INTO Create_account(Name,Email,Password,Phone_number)
		        VALUES ('$Name','$Email','$Password','$Phone_number')");		
	if(mysqli_affected_rows($connect) > 0){
	echo "<a href='login.php'>Now login</a>";
	
}