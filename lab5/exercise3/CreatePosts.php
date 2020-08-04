<?php

echo "<link rel='stylesheet' href='../styles/style.css'>";

$mysqli = new mysqli("mysql.eecs.ku.edu", "e559s777", "GRrS2@%tHJfF", "e559s777");

$User = $_POST['username'];
$newPost = $_POST['newUserPost'];

/* check connection */
if ($mysqli->connect_errno)
{
  printf("Connect failed: %s\n", $mysqli->connect_error);
  exit();
}

$query = "SELECT userID FROM Users WHERE userID='$User'";
/*  */
  echo "<div>";

if ( $result = $mysqli->query($query))
{

  if ( $result->num_rows > 0)
  {
    $query2 = "INSERT INTO Posts (content, authorID) VALUES ('$newPost', '$User')";
    if ( $mysqli->query($query2)===TRUE)
    {
      echo "<h1>Post Created</h1>";
    }
    else
    {
      echo "<h1>Post Not Created</h1>";
    }
  }
  else {
    echo "<h1>Post Not Created</h1>";
  }
}

/* close connection */
$mysqli->close();

?>

<input onclick= "location.href='../index.html'" type="button" value="Home">
</div>
