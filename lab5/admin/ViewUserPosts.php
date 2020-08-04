<div>
<?php
echo "<link rel='stylesheet' href='../styles/style.css'>";
$user = $_POST['choice'];
$mysqli = new mysqli("mysql.eecs.ku.edu", "e559s777", "GRrS2@%tHJfF", "e559s777");

if ($mysqli->connect_error)
{
    printf("Connect failed: %\n", $mysqli->connect_error);
    exit();
}

$query = $mysqli->query("SELECT content FROM Posts WHERE authorID='$user'");

if ($result = $query)
{
  echo "<table class='table'>
          <tr>
            <th>$user's Posts</th>
          </tr>
  ";

  while ($row = $result->fetch_assoc())
  {
    echo "<tr><td>". $row["content"];
    echo "</td></tr>";
  }
  $result->free();
  echo "</table>";
}

$mysqli->close();
?>

<input onclick= "location.href='../index.html'" type="button" value="Home">
</div>
