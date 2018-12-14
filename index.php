<?php
  #Creates a conection between this document and 'conect.php', then creates a variable that will be used to trigger the function that links site to database.
require_once('connect.php');
$conn = connect();

  #A function that makes the forum posts apear on the page.
function Publish ($row , $id) {

   echo
   "<div id = 'game$id'>",
  "<p>",$row["Status"],"</p>",
   "<h2>",$row["Datum"],"</h2>",
   '</div>';

 }


 #Decides were to get the necessary information from the database
$sql = "SELECT post.Status, post.Datum  FROM post ";
  #Checks how many entries there are in the desired database sections
$result = $conn->query($sql);

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
          #Checks if there are any entry at all
       if ($result->num_rows > 0) {
              # Outputs the current entry in the format described above using the Function Publish
            while($row = $result->fetch_assoc()) {
                $tmp++;
                Publish($row, $tmp);
              }
          }
            else {
                echo "No questions asked";
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
  </body>
</html>
