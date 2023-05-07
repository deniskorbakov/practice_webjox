<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            width: 225px;
        }
        th, td {
            border: 1px solid black;
            padding: 5px;
            height: 15px;
        }
    </style>
</head>
<body>
    <table>
    <?php
            for($i=1;$i<=8;$i++) {
                echo "<tr>";

                for ($j=1;$j<=8;$j++) {
                    echo "<td></td>";
                }

                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>