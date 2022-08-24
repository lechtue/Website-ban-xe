<?php
$db=mysqli_connect("127.0.0.1:3306","root","","car_showroom");
if(!$db)
{
	die("could not connect".mysqli_error());
}
?>