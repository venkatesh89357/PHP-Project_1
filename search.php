<?php
include 'db.php';
if (isset($_POST['search_rollnumber'])) {
    $search_rollnumber = $_POST['search_rollnumber'];
    $search_results = 1;
    if (search_results == 1) {
        $rno = $_POST['search_rollnumber'];
        $url = "https://127.0.0.1/results_print.php ? rno" . urlencode($rno);
        header("Location:" . $url);
    }
    echo "</table>";
} else {
    echo "</br>";
    echo "</br>";
    echo "<h1 align='center'>AITS 2023-24|II YEAR-I SEM RESULTS</h1>";
    echo "<form align='center' method='POST' action=''>";
    echo "Enter Roll Number:<input type='text' name='search_rollnumber'>";
    echo "<input type='submit' value='search'>";
    echo "</form>";
}
?>
