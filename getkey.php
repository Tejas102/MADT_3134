<?php
session_start();

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 2. DB: Connect to database
    $dbhost = "localhost";		// address of your database
    $dbuser = "root";					// database username
    $dbpassword = "";					// database password: on MAMP, this is "root"
    $dbname = "school";							// @TODO: database name
    $conn = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);


    //
    $name =   $_POST["name"];
    $id =   $_POST["id"];

    // 3. Query database for a user that matches the id
    $sql = "SELECT * FROM students WHERE name = '$name' AND  id = '$id'";
    echo "<br>";
  //  echo $sql;
    echo "<br>";

$_SESSION['name'] = $name;

    $results = mysqli_query($conn, $sql);
    $x = mysqli_fetch_assoc($results);    //you don't need a while loop because you only get 1 thing back
    print_r($x);


  //   if (mysqli_num_rows($results) == 1) {
  //   header('location: enroll2.html');
  // }else {
  // echo "Wrong Access Key Contact the Studetn Services!!";
  // }


    if ($conn->query($sql) === TRUE) {        //if ($result)
      echo "Success.";
      //  header("Location: edituser.php");
      }
      else {
        echo "Sorry You are not in the database.";
      }

// generating a key using a func..!!
// $s = 3;
// $min = pow(10,$s);
// $max = pow(10,$s+1)-1);
// $value = rand($min, $max);
      // 3. Insert data into the db
             $sql1  =     'UPDATE students '
    			  . 'SET gkey ="' . $name .'" '
                  . 'WHERE name = ' . $name;


                  $result1 = mysqli_query($conn, $sql1);
                  $result1 = $conn->query($sql1);

                  echo $sql1;
                echo "<br>";

                    echo "<br>";
                    // 4. If successful, redirect user to previous page
                    if ($conn->query($sql1) === TRUE) {        //if ($result)
                		echo "Done.";
                    }
                    // 5. If failure, show an error message
                    else {
                      echo "An error occured while saving your data.";
                    }
}
// else  if ($_SERVER["REQUEST_METHOD"] == "GET"){
//
//     // 4. If you find a match, then put row data into the form
//
//     // 5. If no match, then redirect back to previous page
// // POST REQUEST: This means the user got here by pressing "Save Changes" button
// // in the form below
//   // 1. Get data from the form
//   // 2. DB: Connect to the database
//   // 3. DB: Update the database with the new info
//   // 4. UI: If successful, redirect user back to previous page
//   // 5. UI: Otherwise, show an error message
//
//
//
//
//   // 2. Connect to the database
//   $dbhost = "localhost";		// address of your database
//   $dbuser = "root";					// database username
//   $dbpassword = "";					// database password: on MAMP, this is "root"
//   $dbname = "school";							// @TODO: database name
//   $db = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
//
//   // 3. Insert data into the db
//   $sql = "SELECT id, name, studentid FROM students WHERE name='$name'";
//
//   echo $sql;
//   //$result = mysqli_query($db, $sql);
// //$result = $db->query($sql);
// echo "<br>";
//       echo "<br>";
//   // 4. If successful, redirect user to previous page
//   if ($db->query($sql) === TRUE) {        //if ($result)
//   echo "Sucesssssss.....!!!";
//   //  header("Location: edituser.php");
//   }
//   // 5. If failure, show an error message
//   else {
//     echo "An error occured while saving your data.";
//   }
// }
?>

<!DOCTYPE html>
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

    <h1> Register for an Access Key </h1>

    <form action="getkey.php" method="POST">

      Name:  <input  type="text" name="name" value="<?php echo $x['name']; ?>"> <br>
      ID:    <input  type="text" name="id" value="<?php echo $x['id']; ?>"> <br>

      <button type="submit" class="button is-outlined is-link"> Generate Key </button>

    </form>

    <a href="index.html"> Go Back </a>

  </div>
</div>

</body>
</html>
