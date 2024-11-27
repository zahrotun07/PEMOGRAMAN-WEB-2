<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Segitiga Bertingkat</title>
    <style>
        table {
            border-collapse: collapse;
        }
        td {
            width: 30px;
            height: 30px;
            text-align: center;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <table>
        <?php
        // Looping untuk menghasilkan baris
        for ($i = 1; $i <= 5; $i++) {
            echo "<tr>";
            // Looping untuk menghasilkan kolom
            for ($j = 1; $j <= $i; $j++) {
                echo "<td>$j</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>