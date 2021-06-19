<?php


$hostname="localhost";
$username="root";
$pwd="";
$dbname="sparks_bank";
    
$conn=new mysqli($hostname,$username,$pwd,$dbname);

//	$conn = mysqli_connect('shareddb-x.hosting.stackcp.net','shivangi','12345678@','malyaraaj-313537e38d');

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>