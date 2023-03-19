<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan Perulangan</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<table border=1>";
        echo "<td>";
        echo "A";
        echo "</td>";
        echo "<td>";
        echo "A^2";
        echo "</td>";
        echo "<td>";
        echo "A*2";
        echo "</td>";
        for($i=1; $i<=10; $i++){
              echo "<tr>";
              for($j=1; $j<=1; $j++){
                    echo "<td>";
                    echo $i;
                    echo "</td>";
                    echo "<td>";
                    echo $i**2;
                    echo "</td>";
                    echo "<td>";
                    echo $i*2;
                    echo "</td>";
                }
        }
        echo "</table>";
    ?>
</body>
</html>