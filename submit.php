<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wesweb01";
require_once('connect.php');

$conn = connect();

 $text = $_POST['text'];
 $date = date('Y-m-d H:i:s');
 $id = "1225";

 $sql = $conn->query("INSERT INTO posts (id, text, datum) VALUES ('$id', '$text', '$date')");

header('Location:index.php');

?>