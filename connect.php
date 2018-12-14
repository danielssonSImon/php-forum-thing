
<?php
  #Conects this page to the start page
require_once('index.php');

  #Makes a function used to make the other documents look cleaner by only having to call it instead of entering the login again
function connect(){
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "forum";
  #Conects to the database using the above given login details
$conn = new mysqli($servername, $username, $password, $dbname);
  #Makes the page use UTF8 wich makes the use of 'åäöÅÄÖ' possible
 mysqli_set_charset($conn,"UTF8");
  #If the page can't establish a conection it will simply stop.
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
  #Returns the variable $conn to be used in other documents to simplify conecting
return $conn;
}
?>
