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

$fname=$_POST["firstname"];
$lname=$_POST["lastname"];

$sql = "SELECT * FROM contacts WHERE LAST_NAME='$lname' AND FIRST_NAME='$fname'";
$result = $conn->query($sql);

$getdatacolumn = $_POST["datacolumn"];
if($getdatacolumn=='firstname'){
	$datacolumn='FIRST_NAME';
}
else if($getdatacolumn=='lastname'){
	$datacolumn='LAST_NAME';
}
else if($getdatacolumn=='address'){
	$datacolumn='ADDRESS';
}
else if($getdatacolumn=='phone'){
	$datacolumn='PHONE';
}
else if($getdatacolumn=='mobile'){
	$datacolumn='MOBILE';
}
else if($getdatacolumn=='email'){
	$datacolumn='EMAIL';
}


$changedata = $_POST["changedata"];
if($result->num_rows > 0){
	$sql = "UPDATE contacts SET $datacolumn = '$changedata' WHERE LAST_NAME='$lname' AND FIRST_NAME='$fname'";
	$result = $conn->query($sql);
	echo "<br>Data Changed Successfully";
}
else{
	echo "Name Entered Not Found.";
}

echo "<br><form action=\"index.html\">";
echo "<input type=\"submit\" value=\"RETURN\">"

?>