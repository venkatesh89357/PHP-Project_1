<?php
include 'db.php';
$rno = $_REQUEST["rno"];

?>

<html>

<head>
    <title>
        AITS RESULTS
    </title>


    <style>
        ::after th {
            background-color: orange;
            font-size: 25px;
            padding: 20px;
        }

        td {
            font-size: 25px;
            color: blue;
            padding: 10px;
        }

        h1 {
            color: red;
        }

        h2 {
            color: navy;
        }
    </style>

</head>

<body>
    <center>
        <br>
        <h1> AITS 2023-24 | II YEAR-I SEM Results</h1>
    </center>
    <table align="center" border="4px">
        <tr>

            <th align="center">SUB1</th>
            <th align="center">SUB2</th>
            <th align="center">SUB3</th>
            <th align="center">SUB4</th>
            <th align="center">SUB5</th>
            <th align="center">SUB6</th>
            <th align="center">TOTAL</th>

            <th align="center">RESULT</th>


        </tr>
        <?php
        $sql="SELECT * FROM student where rno='$rno'";
        $result=mysqli_query($conn,$sql);
        
    </table>

</body>

</html>
