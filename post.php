<?php 
	$fname = $_POST['first_name'];
	$lname = $_POST['last_name'];
	if (empty($fname)) {
		echo '<script>alert("Welcome to Geeks for Geeks")</script>';
	} else {
	  echo $fname;
	  echo $lname
	  
	}
?>