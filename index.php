<?php
require_once('connect.php');
$conn = connect();


function EchoBoy ($row , $id) {

   echo
   "<div id = 'game$id'>",
   "<h2>",$row["Datum"],"</h2>",
   "<p>",$row["Status"],"</p>",
   '</div>';

 }



$sql = "SELECT post.Status, post.Datum  FROM post ";
$result = $conn->query($sql);
?>
<aside>
        <?php

          $tmp = 0;

       if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                  $tmp++;
                  EchoBoy($row, $tmp);
              }
          } else {
              echo "0 results";
          }
         ?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="../css.css">
  <head>
    <meta charset="utf-8">
    <title>Ask a question!</title>
  </head>
  <body>
    <div class="content">
      <div class="header">

      </div>
      <div class="main">

      </div>
      <div class="text">
        <?php

          $tmp = 0;

       if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                  $tmp++;
                  EchoBoy($row, $tmp);
              }
          } else {
              echo "0 results";
          }
         ?>

      </div>
        <form class="form" action="submit.php" method="post">
            <input class="input" type="text" name="text" value="WHat ">
            <input class="submit"type="submit" name="submit" value="Submit">
        </form>
      <div class="main2">

      </div>
    </div>
    <?php $conn->close(); ?>
  </body>
</html>
