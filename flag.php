<?php
	//function page
	require("function.php");
	//key
	$name = secure($conn, $_REQUEST['nickname']);
	//if key matches
	if($name == 'FLAG{f@k3_7o_@cc3$$_R3@l_F7@g}'){
		$sql = mysqli_query($conn, "SELECT * FROM `flag`");
		$row = mysqli_fetch_assoc($sql);
		$key = secure($conn, $row['key_flag']);
		echo 'Congratulations, Your Flag is: '.$key;
	//if key not matches
	}else{
		echo 'Better Luck Next Time....!!!!';
	}
?>