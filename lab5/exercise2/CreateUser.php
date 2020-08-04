<?php

echo "<link rel='stylesheet' href='../styles/style.css'>";

$mysqli = new mysqli("mysql.eecs.ku.edu", "e559s777", "GRrS2@%tHJfF", "e559s777");

$newUser = $_POST['username'];

/* check connection */
if ($mysqli->connect_errno) {
  printf("Connect failed: %s\n", $mysqli->connect_error);
  exit();
}

$query = "INSERT INTO Users (userID) VALUES ('$newUser')";

  echo "<div>";
if ( $mysqli->query($query)===TRUE) {
  echo "<h1>User Created</h1>";
}
else {
  echo "<h1>User Not Created</h1>";
}

/* close connection */
$mysqli->close();

?>

<input onclick= "location.href='../index.html'" type="button" value="Home">
</div>
