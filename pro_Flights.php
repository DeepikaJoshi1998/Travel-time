<?php include 'database.php'; ?>
<?php
// create a variable
$Starting_from=$_GET['Starting_from'];
$Destination=$_GET['Destination'];
$Date=$_GET['Date'];
$Time=$_GET['Time'];
$Adults=$_GET['Adults'];
$Childrens=$_GET['Childrens'];
$Class=$_GET['Class'];
//Execute the query
mysqli_query($connect,"INSERT INTO Flights(Starting_from,Destination,Adults,Childrens,Class,Date,Time)
		        VALUES ('$Starting_from','$Destination','$Adults','$Childrens','$Class','$Date','$Time')");		
	if(mysqli_affected_rows($connect) > 0){
	echo "<a href='payment.php'>payment</a>";
}
?>