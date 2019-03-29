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

$sql = "SELECT * FROM contacts WHERE LAST_NAME='DALIN'";
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
$mobilenumber = $_POST["currentmobilenumber"];
if($result->num_rows > 0){
	$sql = "UPDATE contacts SET $datacolumn = '$changedata' WHERE MOBILE = '$mobilenumber'";
	$result = $conn->query($sql);
	echo "<br>Data Changed Successfully";
}
else{
	echo "Last Name Entered Not Found.";
}

echo "<br><form action=\"index.html\">";
echo "<input type=\"submit\" value=\"RETURN\">"

?>