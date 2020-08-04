
<div>
<?php

echo "<link rel='stylesheet' href='../styles/style.css'>";

$mysqli = new mysqli("mysql.eecs.ku.edu", "e559s777", "GRrS2@%tHJfF", "e559s777");

/* check connection */
if ($mysqli->connect_errno)
{
  printf("Connect failed: %s\n", $mysqli->connect_error);
  exit();
}

$query = "SELECT userID FROM Users";



if ( $result = $mysqli->query($query))
{


  echo "
    <table class='table'>
      <tr>
        <th>Users<t/th>
      </tr>
  ";

  while ($row = $result->fetch_assoc())
  {

    echo "<tr><td>".$row["userID"];
    echo "</td></tr>";

  }
  echo "</table>";

  $result->free();

}

/* close connection */
$mysqli->close();

?>

<input onclick= "location.href='../index.html'" type="button" value="Home">
</div>
