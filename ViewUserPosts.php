<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
$name = $_POST["user1"];
$mysqli = new mysqli("mysql.eecs.ku.edu", "c257f478", "thoo7Uih","c257f478");

if ($mysqli->connect_errno) {printf("Connect failed: %s\n", $mysqli->connect_error);exit();}

$query = "SELECT * FROM Posts WHERE author_id = '" .$_POST["user1"] . "';";

echo $name;
echo "<br> <br>";
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
      echo $row["content"];
      echo "<br>";
      }
    }

$mysqli->close();
?>
