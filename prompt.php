<!DOCTYPE html>
<html>
<body>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$Dname = "Phonebook1";

$conn = new mysqli($servername, $username, $password, $Dname);

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
	echo "<form action=\"delete.php\" method=\"post\">	<input type=\"submit\" value=\"YES I'M SURE\">	</form>";	
	echo "<form action=\"index.html\">	<input type=\"submit\" value=\"NO I CHANGE MY MIND\">	</form>";
	echo "ARE YOU REALLY SURE YOU WANT TO DELETE THIS DATA?";
}
else{
	echo "Mobile Number Not Found";
}

?>

</body>
</html>