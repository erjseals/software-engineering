<!DOCTYPE html>
<html>
  <head>
    <link rel='stylesheet' href='../styles/style.css'>
  </head>
  <body>
    <div>
    <?php
    $mysqli = new mysqli("mysql.eecs.ku.edu", "e559s777", "GRrS2@%tHJfF", "e559s777");
    if ($mysqli->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    }
    $query = "SELECT userID FROM Users";
    $result = $mysqli->query($query);
    while($rows[] = $result->fetch_object());
    /* Need to remove last null entry in array*/
    array_pop($rows);
    ?>
    <form action= 'ViewUserPosts.php' method= 'post'>
    <select name="choice" required="required">
      <?php foreach ( $rows as $selectedUser ) : ?>
            <option value="<?php echo $selectedUser->userID; ?>"><?php echo $selectedUser->userID; ?></option>
      <?php endforeach; ?>
    </select>
    <br>
    <input type='submit' value='Submit'>
    </form>
  </div>
  </body>
</html>
