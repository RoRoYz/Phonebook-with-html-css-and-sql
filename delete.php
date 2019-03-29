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

$sql = "DELETE FROM contacts WHERE LAST_NAME = 'PATILUNA'";


if($conn->query($sql) === TRUE){
	echo "</br> Record created deleted";
}
else{
	echo "Error: " .$sql . "<br>" . $conn->error;
}


echo "<br><form action=\"index.html\">";
echo "<input type=\"submit\" value=\"RETURN\">";
echo"</form></br>";

?>