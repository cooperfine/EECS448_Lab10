<?php
$user = $_POST["user"];
$mysqli = new mysqli("mysql.eecs.ku.edu", "c257f478", "thoo7Uih","c257f478");
$sql = mysqli_query($mysqli, "SELECT user_id FROM Users WHERE user_id = '$user'");

if ($mysqli->connect_errno) {printf("Connect failed: %s\n", $mysqli->connect_error);exit();}

  if(mysqli_num_rows($sql) > 0) {
    echo "PLEASE ENTER A VALID USER_ID THAT HASN'T BEEN USED PRIOR";
  }
  else {
    if($user == ""){echo "EMPTY User";}
    $query = "INSERT INTO Users(user_id) VALUES ('$user')";
    if($mysqli->query($query) == TRUE)
    {
      echo "SAVED";
    }
    else {echo "not";}
  }
$mysqli->close();
?>
