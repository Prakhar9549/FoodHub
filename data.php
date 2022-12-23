<?php

$con= new mysqli("localhost", "root", "", "food_hub");
if (isset($_REQUEST['sub'])) {
		$Username= $_POST['name'];
        $Number= $_POST['number'];
		$Email= $_POST['email'];
		$Password= $_POST['password'];	
		
		// $uname=base64_encode($Username);
		// $pass=base64_encode($Password);
		// $email=base64_encode($Email);


// $sql= "insert into login values('$uname', '$pass', '$email')";
$sql= "insert into Customer(Name,Phone_Number,Email,Password) values('$Username', '$Number', '$Email','$Password')";

	 if (mysqli_query($con,$sql)) {
        
	 }
	//  else{
	//  	echo "code is incorrect..........." ;
	//  }

}

?>