<?php

	$conn = mysqli_connect('localhost','root','','malyaraaj-313537e38d');

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>