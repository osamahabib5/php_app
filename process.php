<?php

$conn = mysqli_connect( 'localhost','root',"",'vendordb' );

if (isset($_POST['save']))
{
	$name = $_POST['name'];
	$address = $_POST['address'];

	$mysqli_query("insert into vendor(name, address) values('$name',$address) ");
}
?>