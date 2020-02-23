<?php include 'database.php'; ?>
<?php
// create a variable
$Cardnumber=$_POST['Cardnumber'];
$Name=$_POST['Name'];
$Date=$_POST['Date'];
$Cvv=$_POST['Cvv'];
mysqli_query($connect,"INSERT INTO Payment(Cardnumber,Name,Date,Cvv)
		        VALUES ('$Cardnumber','$Name','$Date','$Cvv')");		
	if(mysqli_affected_rows($connect) > 0){
	echo "<p>Payment Done</p>";	
}else {
	echo "Payment Done<br/>";
	echo mysqli_error ($connect);
}


