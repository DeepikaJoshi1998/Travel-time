<?php include 'database.php'; ?>
<?php
// create a variable
$Area=$_GET['Area'];
$Checkin=$_GET['Checkin'];
$Checkout=$_GET['Checkout'];
$Guests=$_GET['Guests'];
$Rooms=$_GET['Rooms'];

//Execute the query
mysqli_query($connect,"INSERT INTO hotels(Area,Checkin,Checkout,Guests,Rooms)
		        VALUES ('$Area','$Checkin','$Checkout','$Guests','$Rooms')");		
	if(mysqli_affected_rows($connect) > 0){
	echo "<a href='payment.php'>payment</a>";
}