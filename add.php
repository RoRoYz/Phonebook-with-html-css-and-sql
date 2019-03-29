<?php
$servername = "localhost";
$username = "root";
$password = "";
$Dname = "Phonebook1";

$conn = new mysqli($servername, $username, $password, $Dname);

if($conn->connect_error){
	die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$lastname=$_POST["LAST_NAME"];
$firstname=$_POST["FIRST_NAME"];
$address=$_POST["ADDRESS"];
$phone=$_POST["PHONE"];
$mobile=$_POST["MOBILE"];
$email=$_POST["EMAIL"];


$sql = "INSERT INTO Phonebook1.contacts(LAST_NAME,
										FIRST_NAME,
										ADDRESS,PHONE,
										MOBILE,
										EMAIL)
								
								VALUES ('$lastname',
										'$firstname',
										'$address',
										'$phone',
										'$mobile',
										'$email')";


if($conn->query($sql) === TRUE){
	echo "</br> New record created successfully";
}
else{
	echo "Error: " .$sql . "<br>" . $conn->error;
}

echo "<form action=\"index.html\">";
echo "<input type=\"submit\" value=\"RETURN\">"

?>