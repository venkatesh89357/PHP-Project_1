<?php
?>

<html>

<head>
    <title>
        RESULTS
    </title>
    <style>
        ::after th {
            background-color: yellow;
            font-size: 25px;
            padding: 10px;
        }

        td {
            font-size: 25px;
            color: yellow;
            padding: 10px;

        }

        h1 {
            color: white;
        }

        h2 {
            color: navy;
        }
    </style>

</head>

<body style="background-color : grey;">
    <center><br>
        <h1>2023-24 | II YEAR-I SEM RESULTS</h1>
    </center>
    <form method="POST" action="insert.php">
        <br>
        <table align=center border="0">
            <tr>
                <td colspan="3" align="center"><b>
                        ROLL NUMBER
                    </b>&nbsp;
                    <input type="text" name="rno" required></>
                </td>
            </tr>
            <tr>
                <td colspan="3">&nbsp;&nbsp;&nbsp;</td>
            </tr>

            <tr>
                <th align="center">SUBJETS</th>
                <th align="center">INTERNAL1</th>
                <th align="center">INTERNAL2</th>
            </tr>
            <tr>
                <td align="center">SUBJET1</td>
                <td align="center">
                    <input type="text" name="sa1" required></>
                </td>
                <td align="center">
                    <input type="text" name="sb1" required></>
                </td>

            </tr>
            <tr>
                <td align="center">SUBJET2</td>
                <td align="center">
                    <input type="text" name="sa2" required></>
                </td>
                <td align="center">
                    <input type="text" name="sb2" required></>
                </td>
            </tr>
            <tr>
                <td align="center">SUBJET3</td>
                <td align="center">
                    <input type="text" name="sa3" required></>
                </td>
                <td align="center">
                    <input type="text" name="sb3" required></>
                </td>
            </tr>

            <tr>
                <td align="center">SUBJET4</td>
                <td align="center">
                    <input type="text" name="sa4" required></>
                </td>
                <td align="center">
                    <input type="text" name="sb4" required></>
                </td>
            </tr>

            <tr>
                <td align="center">SUBJET5</td>
                <td align="center">
                    <input type="text" name="sa5" required></>
                </td>
                <td align="center">
                    <input type="text" name="sb5" required></>
                </td>
            </tr>

            <tr>
                <td align="center">SUBJET6</td>
                <td align="center">
                    <input type="text" name="sa6" required></>
                </td>
                <td align="center">
                    <input type="text" name="sb6" required></>
                </td>
            </tr>
            <tr>
                <td align="center"></td>
                <td colspan="2" align="center">
                    <input type="SUBMIT"></>&nbsp;
                    <input type="RESET"></>
                </td>
            </tr>
        </table>
    </form>

</body>

</html>
