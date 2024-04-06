<?php
include 'db.php';

$rno = $_POST['rno'];
$ia1 = $_POST['sa1'];
$ia2 = $_POST['sa2'];
$ia3 = $_POST['sa3'];
$ia4 = $_POST['sa4'];
$ia5 = $_POST['sa5'];
$ia6 = $_POST['sa6'];
$ib1 = $_POST['sa1'];
$ib2 = $_POST['sb2'];
$ib3 = $_POST['sb3'];
$ib4 = $_POST['sb4'];
$ib5 = $_POST['sb5'];
$ib6 = $_POST['sb6'];
if ($ia1 > $ib1) {
    $i1 = $ia1;
} else {
    $i1 = $ib1;
}
if ($ia2 > $ib2) {
    $i2 = $ia2;
} else {
    $i2 = $ib2;
}
if ($ia3 > $ib3) {
    $i3 = $ia3;
} else {
    $i3 = $ib3;
}
if ($ia4 > $ib4) {
    $i4 = $ia4;
} else {
    $i4 = $ib4;
}
if ($ia5 > $ib5) {
    $i5 = $ia5;
} else {
    $i5 = $ib5;
}
if ($ia6 > $ib6) {
    $i6 = $ia6;
} else {
    $i6 = $ib6;
}
//check if the rollnumber already exists
$sql = "SELECT * FROM STUDENT WHERE RNO='rno'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    echo "Roll Number already exists in the database.";
} else {
    $sql1 = "INSERT INTO student(rno,i1,i2,i3,i4,i5,i6) VALUES('$rno'.'$i1','$i2','$i3','$i4','$i5','$i6')";
    if (mysqli_query($conn, $sql1)) {

        echo "<h1 align='center'>New Record Created Succesfully.</h1>";
        echo "<h1 align='center'>Auto Redirect in 2 seconds,Dont Refresh or press back.</h1>";
    } else {
        echo "Error:" . $sql . "<br>" . mysqli_error($conn);
    }
}
mysqli_close($conn);
$delay = 2;
$destination = "http://127.0.0.1/index.php";
header("refresh:$delay; url= $destination");
?>
