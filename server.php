<!DOCTYPE html>
<html>
  <head>
  <!-- bulma -->
  <link href="css/bulma.min.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="content">
    <h1>  Profile Details .! </h1>
  	<?php
// include('server.php')
 //session_start();
//  $emailid = $_SESSION['email'];
 //$_SESSION['success'] = "You are now logged in";

 // connect to the database
    	$dbhost = "localhost";
    	$dbuser = "root";
    	$dbpassword = "";
    	$dbname = "school";
    	$db = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
		//$query = "SELECT * FROM users WHERE email='$email' AND password='$password' ";
		// Create connection
// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
//$sql = "SELECT id, email, password, firstname, lastname FROM users WHERE email='$emailid'";

$sql = "SELECT id, name, studentid FROM students WHERE name ='$name'";
$result = $db->query($sql);
//echo $sql;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> Id: ". $row["id"]." -<br> Name: ". $row["name"]." <br> StudentID: ". $row["studentid"]. " <br> G KEy: ". $row["gkey"];
    }
} else {
    echo "0 results";
}

$db->close();
?>
</div>
</body>
</html>
