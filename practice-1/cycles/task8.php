<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>width: 100%</title>
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }
    th, td {
        border: 1px solid black;
        padding: 10px;
    }
</style>
</head>
<body>
    <table cellpadding = "5px" cellspacing = "0px"> 
        <?php
            for($i=1;$i<=5;$i++) {
                echo "<tr>";

                for ($j=1;$j<=5;$j++) {
                    echo "<td>$i * $j = ".$i*$j."</td>";
                }

                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>