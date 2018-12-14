<?php
  #Creates a conection between this document and 'conect.php', then creates a variable that will be used to trigger the function that links site to database.
require_once('connect.php');
$conn = connect();
  # Saves waht is about to become a forum entry from the form to a variable
 $text = $_POST['text'];
  #Gets the current date to save alongside the text entry
 $date = date('Y-m-d ');

  #Inserts the text along with the date into the database
 $sql = $conn->query("INSERT INTO post (status, datum) VALUES ('$text', '$date')");
 #Sends the user back to the startpage
header('Location:index.php');

?>
