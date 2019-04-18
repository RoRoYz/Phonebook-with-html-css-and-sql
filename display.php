<?php
$servername = "localhost";
$username = "root";
$password = "";
$Dname = "phonebook1";

$conn = new mysqli($servername, $username, $password, $Dname);

if($conn->connect_error){
	die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$fname=$_POST["firstname"];
$lname=$_POST["lastname"];

$sql = "SELECT * FROM contacts WHERE LAST_NAME='$lname' AND FIRST_NAME='$fname'";
$result = $conn->query($sql);



if($result->num_rows > 0){
	//OUTPUT DATA OF EACH ROW
	while($row = $result->fetch_assoc()){
		echo "</br>	LAST NAME: ".$row["LAST_NAME"]." 
			  </br>	FIRST NAME: ".$row["FIRST_NAME"]." 
			  </br>	ADDRESS: ".$row["ADDRESS"]." 
			  </br>	PHONE: ".$row["PHONE"]." 
			  </br>	MOBILE: ".$row["MOBILE"]." 
			  </br>	EMAIL: ".$row["EMAIL"];
	}	
}
else{
	echo "Name Not Found";
}

echo "<br><form action=\"index.html\">";
echo "<input type=\"submit\" value=\"RETURN\">"

?>