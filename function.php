<?php
	//connection
	$conn = mysqli_connect('localhost', 'root', '', 'chatbox');
	$_SESSION['conn'] = $conn;
	
	if(!$conn){
		mysqli_connect_error();
	}
	//function for security
	function secure($conn, $data){
		$data = htmlspecialchars($data);
		$data = stripslashes($data);
		$data = mysqli_real_escape_string($conn, $data);
		return $data;
	}


?>