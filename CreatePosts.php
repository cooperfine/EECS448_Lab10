<?php
$author = $_POST["user"];
$content = $_POST["posts"];
$mysqli = new mysqli("mysql.eecs.ku.edu", "c257f478", "thoo7Uih","c257f478");
$sql = mysqli_query($mysqli, "SELECT user_id FROM Users WHERE user_id = '$author'");


if ($mysqli->connect_errno) {printf("Connect failed: %s\n", $mysqli->connect_error);exit();}
if($author == ''){echo "EMPTY USER! ";}
if($content == ""){echo "CANNOT CREATE AN EMPTY POST! ";}
if(mysqli_num_rows($sql) > 0) {
  //  echo "here";
   $query = "INSERT INTO Posts(author_id, content) VALUES ('$author', '$content')";
    if($mysqli->query($query) == TRUE){
          echo "SAVED";
    }/*
    else {echo "FALSE";}
  */}
else {
    echo "PLEASE ENTER A VALID USER_ID THAT'S BEEN CREATED";
 }


$mysqli->close();
?>
