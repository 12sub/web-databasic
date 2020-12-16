<?php
$host = "Localhost";
$username = "root";
$password = "";
$database = "helsinki";

$connect = mysqli_connect($host,$username,$password,$database);
if(!$connect){
	echo("Connection not Successful");
	}
else{
	echo("Connection Successful");
	}	

?>
<body>
<br />
<select name="programmes">
<option value="programmes">Select your programme</option>
<option value="Accounting">Accounting</option>
<option value="Architecture">Architecture</option>
<option value="Banking and finance">Banking and finance</option>
<option value="biology">Biology</option>
<option value="Canonical arts">Canonical arts</option>
<option value="Computer Science">Computer Science</option>
<option value="Chemical Engineering">Chemical Engineering</option>
<option value="Civil Engineering">Civil Engineering</option>
<option value="Computer Engineering">Computer Engineering</option>
<option value="Electrical Enginnering">Electrical Enginnering</option>
<option value="Electronics Engineering">Electronics Engineering</option>
<option value="Information Science">Information Science</option>
<option value="Information Engineering">Information Engineering</option>
<option value="Law">Law</option>
<option value="Mechanical Engineering">Mechanical Engineering</option>
<option value="Medicine">Medicine</option>
<option value="Petroleum Engineering">Petroleum Engineering</option>
<option value="Political Science">Political Science</option>
</select>
<button><a href="../space.php">Submit</a></button>



</body>