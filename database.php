<?php
$connect=mysqli_connect('localhost','root','','login');
 
if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}
 
?>