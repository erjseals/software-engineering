<?php

echo "<link rel='stylesheet' href='../styles/style.css'>";

$mysqli = new mysqli("mysql.eecs.ku.edu", "e559s777", "GRrS2@%tHJfF", "e559s777");

$arrayOfPostIDs = $_POST['deleteThesePosts'];
$length = count($arrayOfPostIDs);

/* check connection */
if ($mysqli->connect_errno)
{
  printf("Connect failed: %s\n", $mysqli->connect_error);
  exit();
}


echo "
<div>
  <h1>Here's your confirmation</h1>
  <table class='table'>
    <tr>
      <th>Deletions</th>
    </tr>
";

  for($i=0;$i<$length;$i++)
  {
    $query = "DELETE FROM Posts WHERE postID='$arrayOfPostIDs[$i]'";
    $result = $mysqli->query($query);

    echo "
      <tr>
        <td> postID $arrayOfPostIDs[$i] deleted </td>
      </tr>
    ";

  }
?>
</table>
<input onclick= "location.href='../index.html'" type="button" value="Home">
</div>
