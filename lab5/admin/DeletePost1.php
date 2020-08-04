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
    $query = "SELECT * FROM Posts";
    $result = $mysqli->query($query);
    while($rows[] = $result->fetch_object());
    /* Need to remove last null entry in array*/
    array_pop($rows);
    ?>
    <table class="table">
      <tr>
        <th>UserID</th><th>Post</th><th>PostID</th><th>Delete (*)</th>
      </tr>

    <form action= 'DeletePost.php' method= 'post'>
      <?php
        foreach ( $rows as $selectedPosts ) : ?>
          <tr>
            <td><?php echo $selectedPosts->authorID; ?></td>
            <td><?php echo $selectedPosts->content;  ?></td>
            <td><?php echo $selectedPosts->postID;   ?></td>
            <td><input type="checkbox" name="deleteThesePosts[]" value="<?php echo $selectedPosts->postID;?>"></td>
          </tr>
      <?php endforeach;?>
    </table><br>
    <input type='submit' value='Submit'>
    </form>
    <input onclick= "location.href='../index.html'" type="button" value="Home">
  </div>
  </body>
</html>
