<?php include 'database.php'; ?>
<?php
 // create a variable

$Email=$_GET['Email'];
$Password=$_GET['Password'];

if($Email=="joshideepika500@gmail.com" && $Password=="123456")
{
echo "Book hotels and tickets now";
}
else{
echo "Unregistered user";
}
?>