<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
$content = $_POST["author"];
$mysqli = new mysqli("mysql.eecs.ku.edu", "c257f478", "thoo7Uih","c257f478");
if ($mysqli->connect_errno) {printf("Connect failed: %s\n", $mysqli->connect_error);exit();}


$query = "SELECT content FROM Posts WHERE content ='$content'";

 if($result =$mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $del = mysqli_query($mysqli, "DELETE FROM Posts WHERE content = '$content'");
        echo "Deletion successful!";
      }
    }

$mysqli->close();
?>
