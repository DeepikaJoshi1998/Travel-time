<?php include 'database.php'; ?>
<?php
// create a variable
$Starting_from=$_GET['Starting_from'];
$Destination=$_GET['Destination'];
$Date=$_GET['Date'];
$Time=$_GET['Time'];
$Passengers=$_GET['Passengers'];
$Class=$_GET['Class'];
mysqli_query($connect,"INSERT INTO train(Starting_from,Destination,Passengers,Class,Date,Time)
		        VALUES ('$Starting_from','$Destination','$Passengers','$Class','$Date','$Time')");		
	if(mysqli_affected_rows($connect) > 0){
	echo "<a href='payment.php'>payment</a>";
}