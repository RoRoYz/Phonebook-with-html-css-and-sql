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

$mobile=$_POST["currentmobilenumber"];

$sql = "SELECT * FROM contacts WHERE MOBILE='$mobile'";
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
	echo "Mobile Number Not Found";
}

echo "<br><form action=\"index.html\">";
echo "<input type=\"submit\" value=\"RETURN\">"

?>