<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "c257f478", "thoo7Uih","c257f478");

if ($mysqli->connect_errno) {printf("Connect failed: %s\n", $mysqli->connect_error);exit();}


$query = $mysqli->query("SELECT user_id FROM Users");

if($query->num_rows != 0) {

    while ($row = $query->fetch_assoc()) {
        echo "User: " .$row["user_id"];
        echo "<br>";
    }

}
$mysqli->close();

?>
