<?php
include 'db.php';

$rno = $_POST['rno'];
$e1 = $_POST['sa1'];
$e2 = $_POST['sa2'];
$e3 = $_POST['sa3'];
$e4 = $_POST['sa4'];
$e5 = $_POST['sa5'];
$e6 = $_POST['sa6'];

//check if the rollnumber already exists
$sql = "UPDATE student SET e1='$e1', e2='$e2', e3='$e3', e4='$e4', e5='$e5', e6='$e6' WHERE rno='$rno'";
if(mysqli_query($conn, $sql))
{
   echo "<h1 align='center'>$rno External marks updated successfully.<h1>";
   echo "<h1 align='center'>Auto Redirect in 2 second, Dont Refresh or press back</h1>";
}
else{
    echo "Error:".$sql.""<br>;.mysqli_error($conn);
}

mysqli_close($conn);
$delay = 2;
$destination = "http://127.0.0.1/page2.php";
header("refresh:$delay; url= $destination");
?>
