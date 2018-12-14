<?php
require_once('connect.php');
$conn=connect();
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
