<?php
session_start();

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

	<h1>Welcome <strong><?php echo $_SESSION['name']; ?></strong></h1>
    <h1> Choose a Section </h1>

    <p>
      Instructor Name:  Peter Smith <br>
      Spots Remaining:  25 </br>
      <a href="enroll3.html" class="button is-outlined is-link"> Enroll </a>
    </p>


    <p>
      Instructor Name:  Sam Jones <br>
      Spots Remaining:  18 </br>
      <a href="enroll3.html" class="button is-outlined is-link"> Enroll </a>
    </p>


    <p>
      Instructor Name:  Mary Feist <br>
      Spots Remaining:  2 </br>
      <a href="enroll3.html" class="button is-outlined is-link"> Enroll </a>
    </p>

    <p>
      Instructor Name:  Mr. Popular <br>
      Spots Remaining:  0 </br>

    </p>



    <a href="index.html"> Go Back </a>

  </div>
</div>

</body>
</html>
