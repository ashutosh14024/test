<?php

function Connect()
{
	$conn = mysqli_connect("localhost", "root", "ashuindia", "test");
	return $conn;
}

?>
