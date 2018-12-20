<?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 2. DB: Connect to database
    $dbhost = "localhost";		// address of your database
    $dbuser = "root";					// database username
    $dbpassword = "";					// database password: on MAMP, this is "root"
    $dbname = "school";							// @TODO: database name
    $conn = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);


    //
    //$name =   $_POST["name"];
    $gkey =   $_POST["gkey"];

    // 3. Query database for a user that matches the id
    $sql = "SELECT * FROM students WHERE gkey = '$gkey'";
    echo "<br>";
  //  echo $sql;
    echo "<br>";

    $results = mysqli_query($conn, $sql);
    $x = mysqli_fetch_assoc($results);    //you don't need a while loop because you only get 1 thing back
    print_r($x);

    if (mysqli_num_rows($results) == 1) {
    header('location: enroll2.php');
  }else {
  echo "Wrong Access Key.";
  }
}
?>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/bulma.min.css">
  <style type="text/css">
    .container{
      margin-top:40px;
    }
    form {
      max-width:250px;
    }
    button {
      margin-top:10px;
    }
  </style>
</head>
<body>

<div class="container">
  <div class="content">

    <h1> Enter Your Access Key </h1>

    <form action="enroll.php" method="POST">
      Access Key:  <input  type="text" name="gkey" value="<?php echo $x['gkey']; ?>"> <br>
      <button type="submit" class="button is-outlined is-link"> Next </button>
    </form>

    <a href="index.html"> Go Back </a>

  </div>
</div>

</body>
</html>
